<?php
//modelo para a tabela Pagamentos

require_once 'conexao.php';

class Pagamentos
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Método para inserir um novo pagamento
    public function inserirPagamento($despesaID, $userID, $valor, $dataPagamento, $metodoPagamento)
    {
        // Implementação do método de inserção (create)
        global $conn;

        // Preparar a declaração
        $stmt = $conn->prepare("INSERT INTO Pagamentos (DespesaID, UserID, Valor, DataPagamento, MetodoPagamento) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $despesaID, $userID, $valor, $dataPagamento, $metodoPagamento);

        // Executar a declaração 
        if ($stmt->execute()) {
            return true;  // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }
}
