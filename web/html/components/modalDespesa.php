<!-- Modal -->
<div class="modal fade" id="modalDespesa" tabindex="-1" aria-labelledby="modalDespesasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDespesasLabel">Todas as Despesas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Descrição</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data da Despesa</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php // Verifica se $_SESSION['despesas'] está definida
                        if (isset($_SESSION['despesas'])) {

                            // Exemplo de como você pode iterar sobre $despesas para exibir na sua tabela HTML
                            foreach ($despesas as $despesa) {
                                echo "<tr>";
                                echo "<td>" . $despesa['Descricao'] . "</td>";
                                echo "<td>R$ " . number_format($despesa['Valor'], 2, ',', '.') . "</td>";
                                echo "<td>" . $despesa['Categoria'] . "</td>";
                                echo "<td>" . date('d/m/Y', strtotime($despesa['DataDespesa'])) . "</td>";
                                echo "<td>" . $despesa['StatusDespesa'] . "</td>";
                                echo "<td>";
                                echo "<button type='button' class='btn btn-warning btn-sm' onclick='alterarDespesa(" . $despesa['DespesaID'] . ")'>Alterar</button>";
                                echo "<button type='button' class='btn btn-danger btn-sm' onclick='excluirDespesa(" . $despesa['DespesaID'] . ")'>Excluir</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            // Caso $_SESSION['despesas'] não esteja definida, você pode tratar isso conforme necessário
                            echo "Não há despesas para exibir.";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>