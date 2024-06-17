<?php
//modelo para a tabela Despesas

require_once 'conexao.php';

class Despesas
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Método para inserir uma nova despesas
    public function inserirDespesa($userID, $descricao, $valor, $categoria, $dataDespesa, $status)
    {
        // Implementação do método de inserção (create)
        global $conn;

        // Preparar a declaração
        $stmt = $conn->prepare("INSERT INTO Despesas (UserID, Descricao, Valor, Categoria, DataDespesa, StatusDespesa) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $userID, $descricao, $valor, $categoria, $dataDespesa, $status);

        // Executar a declaração 
        if ($stmt->execute()) {
            return true;  // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }

    public function verDespesas($userID)
    {
        global $conn;

        // Preparar a declaração
        $stmt = $conn->prepare("SELECT DespesaID, Descricao, Valor, Categoria, DataDespesa, StatusDespesa FROM Despesas WHERE UserID=?");

        // Verificar se a preparação da declaração foi bem sucedida
        if (!$stmt) {
            die('Erro na preparação da declaração SQL: ' . $conn->error);
        }

        // Vincular parâmetro
        $stmt->bind_param("i", $userID);

        // Executar a declaração
        $stmt->execute();

        // Capturar resultados
        $result = $stmt->get_result();

        // Verificar se houve resultados
        if ($result->num_rows > 0) {
            // Array para armazenar as despesas
            $despesas = array();

            // Iterar sobre os resultados
            while ($row = $result->fetch_assoc()) {
                $despesas[] = $row;
            }

            // Fechar declaração e retornar despesas
            $stmt->close();
            return $despesas;
        } else {
            // Caso não haja despesas encontradas
            $stmt->close();
            return array(); // Retorna um array vazio
        }
    }

    public function excluirDespesa($userID, $despesaID)
    {
        global $conn;

        // Preparar a declaração
        $stmt = $conn->prepare("DELETE FROM Despesas WHERE UserID=? AND DespesaID=?");

        // Verificar se a preparação da declaração foi bem sucedida
        if (!$stmt) {
            die('Erro na preparação da declaração SQL: ' . $conn->error);
        }

        // Vincular parâmetro
        $stmt->bind_param("ii", $userID, $despesaID);

        // Executar a declaração
        $stmt->execute();

        // Executar a declaração 
        if ($stmt->execute()) {
            return true;  // Exclusão bem-sucedida
        } else {
            return false; // Erro na Exclusão
        }
    }

    public function atualizarDespesa($userID, $despesaID, $descricao, $valor, $categoria, $dataDespesa, $status)
    {
        global $conn;

        // Preparar a declaração
        $stmt = $conn->prepare("UPDATE Despesas SET Descricao = ?, Valor = ?, Categoria = ?, DataDespesa = ?, StatusDespesa = ?   WHERE UserID=? AND DespesaID=?");

        // Verificar se a preparação da declaração foi bem sucedida
        if (!$stmt) {
            die('Erro na preparação da declaração SQL: ' . $conn->error);
        }

        //Vincular parâmetro
        $stmt->bind_param("sssssii", $descricao, $valor, $categoria, $dataDespesa, $status, $userID, $despesaID, );

        // Executar a declaração
        $stmt->execute();

        // Executar a declaração 
        if ($stmt->execute()) {
            return true;  // Atualização bem-sucedida
        } else {
            return false; // Erro na Atualização
        }

    }
}
