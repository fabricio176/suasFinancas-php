<?php
//Incluir o arquivo de conexao e a classe do modelo Usuario

require_once '../modelo/conexao.php';
require_once '../modelo/Usuario.php';

class UsuariosController
{
    private $usuarioModel;

    public function __construct($conn)
    {
        $this->usuarioModel = new Usuario($conn);
    }

    // Método para inserir um novo usuario

    public function inserirUsuario($nome, $email, $senha, $nivelAcesso)
    {
        return $this->usuarioModel->inserirUsuario($nome, $email, $senha, $nivelAcesso);
    }

    // Método para atualizar dados do usuario
    public function atualizarUsuario($userID, $nome, $email, $senha)
    {
        return $this->usuarioModel->atualizarUsuario($userID, $nome, $email, $senha);
    }

    public function buscarDados($userID, $tabela)
    {
        return $this->usuarioModel->buscarDados($userID, $tabela);
    }
}
// Fechar a conexão após todas as operações
$conn->close();
