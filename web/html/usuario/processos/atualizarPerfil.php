<?php
// Variável para armazenar mensagens de erro
$erro = '';

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão
    require_once '../../../../modelo/conexao.php';
    require_once '../../../../modelo/Despesas.php';
    require_once '../../../../modelo/Usuario.php';


    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $userID = $_SESSION['UserID']; //UserID na sessão




    // Instancia a classe Despesa com a conexão
    $despesaModel = new Despesas($conn);
    $usuarioModel = new Usuario($conn);



    // Chama o método para inserir um novo usuário
    $atualizado = $usuarioModel->atualizarUsuario($userID, $nome, $email, $senha);



    if ($atualizado) {
        // Redireciona ou executa outra ação após o cadastro

        //Chama o método para ver as despesas
        $despesas = $despesaModel->verDespesas($userID);

        // Armazenar as despesas na sessão
        $_SESSION['despesas'] = $despesas;

        //busca os dados das tabelas para o dashboard
        $despesasDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Despesas');
        $metasDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Metas');
        $pagamentosDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Pagamentos');

        // Armazenar as variáveis na sessão
        $_SESSION['despesas'] = $despesas;
        $_SESSION['despesasDashboard'] = $despesasDashboard;
        $_SESSION['metasDashboard'] = $metasDashboard;
        $_SESSION['pagamentosDashboard'] = $pagamentosDashboard;


        echo "<script>
                alert('Usuário atualizado com sucesso.');
                window.location.href = '../../usuario/despesas.php';
              </script>";
        exit;
    } else {
        $erro = "Erro ao atualizar usuário. Por favor, tente novamente mais tarde.";
        echo "<script>alert('$erro');
            window.location.href = '../../usuario/despesas.php';
              </script>";
        exit;
    }
}
?>