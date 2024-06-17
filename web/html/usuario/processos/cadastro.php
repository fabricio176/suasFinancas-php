<?php
// Variável para armazenar mensagens de erro
$erro = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão
    require_once '../../../../modelo/conexao.php';
    require_once '../../../../modelo/Usuario.php';

    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Instancia a classe Usuario com a conexão
    $usuarioModel = new Usuario($conn);

    // Verifica se o email já está registrado
    if ($usuarioModel->emailExiste($email)) {
        $erro = "Este email já está registrado. Por favor, escolha outro email.";
        // Exibe o alerta em JavaScript com função de callback
        echo "<script>
                alert('$erro');
                window.location.href = '../../index.php';
              </script>";
        exit; // Encerra o script para evitar problemas de redirecionamento
    } else {
        // Chama o método para inserir um novo usuário
        $inserido = $usuarioModel->inserirUsuario($nome, $email, $senha, 'usuario'); // 'usuario' é o nível padrão

        if ($inserido) {
            // Redireciona ou executa outra ação após o cadastro
            echo "<script>
                alert('Usuário cadastrado com Sucesso, efetue o logn.');
                window.location.href = '../../index.php';
              </script>";
            exit;
        } else {
            $erro = "Erro ao cadastrar usuário. Por favor, tente novamente mais tarde.";
            echo "<script>alert('$erro');</script>";
            header('Location: ../../index.php');
            exit;
        }
    }
} else {
    // Redireciona e exibe uma mensagem de erro caso o formulário não tenha sido enviado corretamente
    $erro = "Erro: Formulário não enviado corretamente.";
    echo "<script>
        alert('$erro');
        window.location.href = '../../index.php';
        </script>";
}
?>