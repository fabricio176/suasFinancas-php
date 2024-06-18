<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão
    require_once '../../../../modelo/conexao.php';
    require_once '../../../../modelo/Usuario.php';
    require_once '../../../../modelo/Despesas.php';


    // Captura os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Instancia a classe Usuario com a conexão
    $usuarioModel = new Usuario($conn);
    $despesaModel = new Despesas($conn);

    // Busca o usuário pelo email fornecido
    $usuario = $usuarioModel->buscarUsuarioPorEmail($email);

    
    if ($usuario && password_verify($senha, $usuario['Senha'])) {
        // Iniciar a sessão (se ainda não estiver iniciada)
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Armazenar dados do usuário na sessão
        $_SESSION['UserID'] = $usuario['UserID'];
        $_SESSION['Nome'] = $usuario['Nome'];
        $_SESSION['Email'] = $usuario['Email']; 
        $_SESSION['NivelAcesso'] = $usuario['NivelAcesso'];



        // despesas
        $despesas = $despesaModel->verDespesas($_SESSION['UserID']);

        //busca os dados das tabelas para o dashboard
        $despesasDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Despesas');
        $metasDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Metas');
        $pagamentosDashboard = $usuarioModel->buscarDados($_SESSION['UserID'], 'Pagamentos');

        // Armazenar as vaariáveis na sessão
        $_SESSION['despesas'] = $despesas;
        $_SESSION['despesasDashboard'] = $despesasDashboard;
        $_SESSION['metasDashboard'] = $metasDashboard;
        $_SESSION['pagamentosDashboard'] = $pagamentosDashboard;



        // Redireciona para a página de sucesso após o login
        header('Location: ../pagina_sucesso.php');
        exit;
    } else {
        $erro = "Credenciais inválidas. Por favor, tente novamente.";
        echo "<script>
        alert('$erro');
        window.location.href = '../../../../index.php';
        </script>";
    }
} else {
    // Redireciona e exibe uma mensagem de erro caso o formulário não tenha sido enviado corretamente
    $erro = "Erro: Formulário não enviado corretamente.";
    echo "<script>
        alert('$erro');
        window.location.href = '../../../../index.php';
        </script>";
}
?>