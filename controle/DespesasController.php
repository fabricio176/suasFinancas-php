<?php
//arquivo de conexao e a classe do modelo Despesa

require_once '../modelo/conexao.php';
require_once '../modelo/Despesas.php';

class DespesasController
{
    private $despesaModel;

    public function __construct($conn)
    {
        $this->despesaModel = new Despesas($conn);
    }

    // Método para inserir uma nova despesa
    public function inserirDespesa($userID, $descricao, $valor, $categoria, $dataDespesa, $status)
    {
        return $this->despesaModel->inserirDespesa($userID, $descricao, $valor, $categoria, $dataDespesa, $status);
    }

    public function verDespesas($userID)
    {
        return $this->despesaModel->verDespesas($userID);
    }

}

// Fechar a conexão após todas as operações
$conn->close();
?>