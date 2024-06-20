<?php

// Verificar se a variável de sessão existe e tem valores
if (isset($_SESSION['despesasPrestesAVencer'])) {
    // Verificar se há despesas prestes a vencer
    if (!empty($_SESSION['despesasPrestesAVencer']['prestesAVencer'])) {
        // Iterar sobre as despesas prestes a vencer
        foreach ($_SESSION['despesasPrestesAVencer']['prestesAVencer'] as $despesa) {
            $descricao = $despesa['Descricao'];
            $dataDespesa = date('d/m/Y', strtotime($despesa['DataDespesa']));

            // Exibir o alerta em Bootstrap para despesas prestes a vencer
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Aviso: A despesa <strong>' . $descricao . '</strong> com vencimento em ' . $dataDespesa . ' está prestes a vencer. Efetue o pagamento para evitar problemas.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }

    // Verificar se há despesas vencidas
    if (!empty($_SESSION['despesasPrestesAVencer']['vencidas'])) {
        // Iterar sobre as despesas vencidas
        foreach ($_SESSION['despesasPrestesAVencer']['vencidas'] as $despesa) {
            $descricao = $despesa['Descricao'];
            $dataDespesa = date('d/m/Y', strtotime($despesa['DataDespesa']));

            // Exibir o alerta em Bootstrap para despesas vencidas
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Aviso: A despesa <strong>' . $descricao . '</strong> com vencimento em ' . $dataDespesa . ' já venceu.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }

    // Limpar a variável de sessão após exibir os alertas (opcional)
    unset($_SESSION['despesasPrestesAVencer']);
} else {
    // Caso não haja despesas prestes a vencer na sessão
    echo '<div class="alert alert-info" role="alert">Não há despesas prestes a vencer.</div>';
}

?>
