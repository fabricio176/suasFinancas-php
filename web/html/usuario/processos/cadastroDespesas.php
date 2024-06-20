<?php
// Variável para armazenar mensagens de erro
$erro = '';

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Inclui o arquivo de conexão e os modelos
  require_once '../../../../modelo/conexao.php';
  require_once '../../../../modelo/Usuario.php';
  require_once '../../../../modelo/Despesas.php';

  // Captura os dados do formulário
  $descricao = $_POST['descricao'];
  $valor = $_POST['valor'];
  $categoria = $_POST['categoria'];
  $dataDespesa = $_POST['dataDespesa'];
  $status = $_POST['status'];
  $recorrente = isset($_POST['recorrente']); // Checkbox
  $userID = $_SESSION['UserID']; // UserID na sessão

  // Valida os dados do formulário
  if (empty($descricao) || empty($valor) || empty($categoria) || empty($dataDespesa)) {
    $erro = "Todos os campos são obrigatórios.";
    echo "<script>alert('$erro'); window.location.href = '../../usuario/despesas.php';</script>";
    exit;
  }

  // Instancia a classe Despesas com a conexão
  $despesaModel = new Despesas($conn);
  $usuarioModel = new Usuario($conn);



  // Verifica o valor mínimo
  $valorMinimo = $despesaModel->obterValorMinimo($userID);
  if ($valorMinimo !== null && ($valor < $valorMinimo && !$recorrente)) {
    // Condição para valor menor que o mínimo (quando mínimo está definido) e não é recorrente
    $erro = "Erro ao cadastrar despesa. O valor da despesa é inferior ao valor mínimo permitido.";
    echo "<script>alert('$erro'); window.location.href = '../../usuario/despesas.php';</script>";
    exit;
  }


  // Verifica o limite de gastos por categoria
  $limiteAtual = $despesaModel->verificarLimite($userID, $categoria);

  if ($limiteAtual !== null) {
    // Verifica o total de gastos na categoria
    $totalGasto = $despesaModel->verificarTotalGasto($userID, $categoria);

    // Verifica se o valor da nova despesa excede o limite atual
    if ($totalGasto + $valor > $limiteAtual) {
      $erro = "Erro ao cadastrar despesa. Você excedeu o Limite de Gastos, defina um limite maior para continuar.";
      echo "<script>alert('$erro'); window.location.href = '../../usuario/despesas.php';</script>";
      exit;
    }
  }

  // Chama o método para inserir uma nova despesa
  $inserido = $despesaModel->inserirDespesa($userID, $descricao, $valor, $categoria, $dataDespesa, $status);

  if ($inserido) {
    // Verifica se a categoria existe para o usuário
    $categoriaExiste = $despesaModel->categoriaExiste($userID, $categoria);
    if (!$categoriaExiste) {
      $despesaModel->inserirCategoria($userID, $categoria);
    }

    // Chama o método para ver as despesas
    $despesas = $despesaModel->verDespesas($userID);

    // Busca os dados das tabelas para o dashboard
    $despesasDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Despesas');
    $metasDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Metas');
    $pagamentosDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Pagamentos');
    $despesasPrestesAVencer = $despesaModel->verificarDespesasPrestesAVencer($_SESSION['UserID']);

    // Armazena as variáveis na sessão
    $_SESSION['despesas'] = $despesas;
    $_SESSION['despesasDashboard'] = $despesasDashboard;
    $_SESSION['metasDashboard'] = $metasDashboard;
    $_SESSION['pagamentosDashboard'] = $pagamentosDashboard;
    $_SESSION['despesasPrestesAVencer'] = $despesasPrestesAVencer;

    echo "<script>
                alert('Despesa inserida com sucesso.');
                window.location.href = '../../usuario/despesas.php';
              </script>";
    exit;
  } else {
    $erro = "Erro ao cadastrar despesa. Por favor, tente novamente mais tarde.";
    echo "<script>alert('$erro'); window.location.href = '../../usuario/despesas.php';</script>";
    exit;
  }
}
