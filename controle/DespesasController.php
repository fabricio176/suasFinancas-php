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

    // Método para ver despesas
    public function verDespesas($userID)
    {
        return $this->despesaModel->verDespesas($userID);
    }

    // Método para excluir despesa
    public function excluirDespesa($userID, $despesaID)
    {
        return $this->despesaModel->excluirDespesa($userID, $despesaID);
    }

    // Método para atualizar despesa
    public function atualizarDespesa($userID, $despesaID, $descricao, $valor, $categoria, $dataDespesa, $status)
    {
        return $this->despesaModel->atualizarDespesa($userID, $despesaID, $descricao, $valor, $categoria, $dataDespesa, $status);
    }

    public function inserirOuAtualizarValorMinimo($userID, $valorMinimo){
        return $this->inserirOuAtualizarValorMinimo($userID, $valorMinimo);
    }

    public function obterValorMinimo($userID){
        return $this->obterValorMinimo($userID);
    }

    public function verificarDespesasPrestesAVencer($userID){
        return $this->verificarDespesasPrestesAVencer($userID);
    }
}

// Fechar a conexão após todas as operações
$conn->close();
