<?php
//arquivo de conexao e a classe do modelo Despesa

require_once '../modelo/conexao.php';
require_once '../modelo/MetasFinanceiras.php';

class MetasFinanceirasController
{
    private $metasFinanceirasModel;

    public function __construct($conn)
    {
        $this->metasFinanceirasModel = new MetasFinanceiras($conn);
    }

    // Método para inserir uma nova despesa
    public function inserirMetas($userID, $descricao, $valorAlvo, $prazo, $tipo, $dataInicio)
    {
        return $this->metasFinanceirasModel->inserirMetas($userID, $descricao, $valorAlvo, $prazo, $tipo, $dataInicio);
    }

}

// Fechar a conexão após todas as operações
$conn->close();
?>