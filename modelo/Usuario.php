<?php
//modelo para a tabela Usuarios

require_once 'conexao.php';

class Usuario
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Método para inserir um novo usuário
    public function inserirUsuario($nome, $email, $senha, $nivelAcesso)
    {
        // Verificar se o email já existe
        if ($this->emailExiste($email)) {
            return false; // Retorna falso se o email já estiver registrado
        }


        // Implementação do método de inserção (create)
        global $conn;

        // Hash da senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Preparar a declaração
        $stmt = $conn->prepare("INSERT INTO Usuarios (Nome, Email, Senha, NivelAcesso) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $email, $senhaHash, $nivelAcesso);

        // Executar a declaração 
        if ($stmt->execute()) {
            return true;  // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }

    // Verificar se o email já está registrado
    public function emailExiste($email)
    {
        $stmt = $this->conn->prepare("SELECT UserID FROM Usuarios WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();

        return $num_rows > 0; // Retorna true se o email já existe, false caso contrário
    }

    // Método para atualizar informações de um usuário
    public function atualizarUsuario($userID, $nome, $email, $senha)
    {
        global $conn;

        // Verificar se a senha foi fornecida e gerar hash
        if (!empty($senha)) {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "UPDATE Usuarios SET Nome=?, Email=?, Senha=? WHERE UserID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $nome, $email, $senhaHash, $userID);
        } else {
            $sql = "UPDATE Usuarios SET Nome=?, Email=? WHERE UserID=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssi", $nome, $email, $userID);
        }

        if ($stmt->execute()) {
            return true; // Atualização bem-sucedida
        } else {
            return false; // Erro na atualização
        }
    }

    //Método para buscar usuário por email
    // Método para buscar um usuário pelo email
    public function buscarUsuarioPorEmail($email)
    {
        // Consulta SQL para buscar o usuário pelo email
        $sql = "SELECT UserID, Nome, Email, Senha, NivelAcesso FROM Usuarios WHERE Email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se encontrou algum usuário com o email fornecido
        if ($result->num_rows > 0) {
            return $result->fetch_assoc(); // Retorna os dados do usuário encontrado
        } else {
            return null; // Retorna null se não encontrou o usuário
        }
    }

    public function buscarDados($userID, $tabela)
    {
        // Consulta SQL para buscar os dados de uma tabela específica
        $sql = "SELECT * FROM $tabela WHERE UserID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $userID);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);

    }
}
