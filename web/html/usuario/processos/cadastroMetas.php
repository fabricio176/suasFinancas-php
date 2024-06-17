<?php
// Variável para armazenar mensagens de erro
$erro = '';

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão
    require_once '../../../../modelo/conexao.php';
    require_once '../../../../modelo/MetasFinanceiras.php'; // Certifique-se de ajustar o nome do arquivo e da classe conforme necessário

    // Captura os dados do formulário
    $descricao = $_POST['descricao'];
    $valorAlvo = $_POST['valorAlvo'];
    $prazo = $_POST['prazo'];
    $tipo = $_POST['tipo'];
    $dataInicio = $_POST['dataInicio'];
    $userID = $_SESSION['UserID']; //UserID na sessão

    // Instancia a classe Metas com a conexão
    $metasFinanceirasModel = new MetasFinanceiras($conn); // Certifique-se de ajustar o nome da classe conforme necessário

    // Chama o método para inserir uma nova meta
    $inserido = $metasFinanceirasModel->inserirMetas($userID, $descricao, $valorAlvo, $prazo, $tipo, $dataInicio);

    if ($inserido) {
        // Redireciona ou executa outra ação após o cadastro
        echo "<script>
            alert('Meta financeira inserida com sucesso.');
            window.location.href = '../../usuario/metasFinanceiras.php';
          </script>";
        exit;
    } else {
        $erro = "Erro ao cadastrar meta financeira. Por favor, tente novamente mais tarde.";
        echo "<script>alert('$erro');
        window.location.href = '../../usuario/metasFinanceiras.php';
          </script>";
        exit;
    }
}
?>
