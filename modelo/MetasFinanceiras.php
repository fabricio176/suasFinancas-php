<?php
//modelo para a tabela MetasFinanceiras

require_once 'conexao.php';

class MetasFinanceiras
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Método para inserir uma nova despesas
    public function inserirMetas($userID, $descricao, $valorAlvo, $prazo, $tipo, $dataInicio)
    {
        // Implementação do método de inserção (create)
        global $conn;

        // Preparar a declaração
        $stmt = $conn->prepare("INSERT INTO Metas (UserID, Descricao, ValorAlvo , Prazo , Tipo, DataInicio) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $userID, $descricao, $valorAlvo, $prazo, $tipo, $dataInicio);

        // Executar a declaração 
        if ($stmt->execute()) {
            return true;  // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }

}
?>