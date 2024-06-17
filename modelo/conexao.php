<?php
// Configurações do banco de dados
$hostname = 'localhost';   // Host onde o MySQL está rodando
$username = 'root';        // Usuário do banco de dados
$password = '';            // Senha do banco de dados
$database = 'suasfinancas';// Nome do banco de dados que você deseja acessar

// Conectar ao banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

// Verifica conexão
if ($conn->connect_errno) {
    die('Erro na conexão: ' . $conn->connect_error);
}

?>
