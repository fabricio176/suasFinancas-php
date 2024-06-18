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
    // Método para inserir uma nova despesa
    public function inserirDespesa($userID, $descricao, $valor, $categoria, $dataDespesa, $status)
    {
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
        $stmt->bind_param("sssssii", $descricao, $valor, $categoria, $dataDespesa, $status, $userID, $despesaID,);

        // Executar a declaração
        $stmt->execute();

        // Executar a declaração 
        if ($stmt->execute()) {
            return true;  // Atualização bem-sucedida
        } else {
            return false; // Erro na Atualização
        }
    }

    public function limiteDeGastos($userID, $categoria, $limite)
    {
        global $conn;

        // Utilizando INSERT ... ON DUPLICATE KEY UPDATE
        $sql = "INSERT INTO LimitesGastos (UserID, Categoria, Limite) 
            VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE Limite = VALUES(Limite)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isd", $userID, $categoria, $limite);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }




    // Verificação de limite de gasto ao inserir uma nova despesa
    public function verificarTotalGasto($userID, $categoria)
    {
        $sql = "SELECT SUM(Valor) as total_gasto FROM Despesas 
            WHERE UserID = ? 
            AND Categoria = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("is", $userID, $categoria);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $totalGasto = $row['total_gasto'];

        // Se não houver despesas ainda para este mês, retorna 0
        if ($totalGasto === null) {
            $totalGasto = 0;
        }

        return $totalGasto;
    }


    public function verificarLimite($userID, $categoria)
    {
        global $conn;

        $sql = "SELECT Limite FROM LimitesGastos WHERE UserID = ? AND Categoria = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $userID, $categoria);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verifica se encontrou algum resultado
        if ($result->num_rows > 0) {
            // Obtém o resultado como array associativo
            $row = $result->fetch_assoc();
            // Retorna o limite encontrado
            return $row['Limite'];
        } else {
            // Caso não encontre nenhum limite, retorna NULL ou outro valor padrão desejado
            return null;
        }
    }


    public function categoriaExiste($userID, $categoria)
    {
        $sql = "SELECT COUNT(*) as total FROM RegrasCategorizacao WHERE UserID = ? AND Categoria = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("is", $userID, $categoria);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $total = $row['total'];

        return $total > 0;
    }


    public function inserirCategoria($userID, $categoria)
    {
        global $conn;
        // Preparar e executar a consulta para inserir a nova regra
        $sql = "INSERT INTO RegrasCategorizacao (UserID, Categoria) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $userID, $categoria); // Corrigido para "is" (integer, string)

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function categorizarDespesa($userID, $categoria)
    {
        global $conn;

        $sql = "SELECT * FROM RegrasCategorizacao WHERE UserID =?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $userID);
        $stmt->execute();

        $resultado = $stmt->get_result();

        //Verificar cada regra para encontrar uma correspondencia
        while ($regra = $resultado->fetch_assoc()) {
            if (strpos($categoria, $regra["Outros"], "") !== false) {
                // Se encontrou uma correspondência, retorna a categoria
                return $regra['Categoria'];
            }
        }
        // Se nenhuma regra corresponder, retorna uma categoria padrão ou null
        return null;
    }

    public function inserirOuAtualizarValorMinimo($userID, $valorMinimo)
    {
        // Verifica se o valor mínimo já existe para o usuário
        $sql = "SELECT ValorMinimo FROM ValorMinimo WHERE UserID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $userID);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Se o valor mínimo já existe, atualizar o valor
            $sql = "UPDATE ValorMinimo SET ValorMinimo = ? WHERE UserID = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('di', $valorMinimo, $userID);
        } else {
            // Se o valor mínimo não existe, inserir um novo valor
            $sql = "INSERT INTO ValorMinimo (UserID, ValorMinimo) VALUES (?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('id', $userID, $valorMinimo);
        }

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function obterValorMinimo($userID)
    {
        $sql = "SELECT ValorMinimo FROM ValorMinimo WHERE UserID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $userID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        return $row ? $row['ValorMinimo'] : null;
    }
}
