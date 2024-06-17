<?php
//Incluir o arquivo de conexao e a classe do modelo Pagamentos

require_once '../modelo/conexao.php';
require_once '../modelo/Pagamentos.php';

class UsuariosController
{
    private $pagamentosModel;

    public function __construct($conn)
    {
        $this->pagamentosModel = new Pagamentos($conn);
    }

    // Método para inserir um novo usuario

    public function inserirPagamento($despesaID, $userID, $valor, $dataPagamento, $metodoPagamento)
    {
        return $this->pagamentosModel->inserirPagamento($despesaID, $userID, $valor, $dataPagamento, $metodoPagamento);
    }
}
// Fechar a conexão após todas as operações
$conn->close();
