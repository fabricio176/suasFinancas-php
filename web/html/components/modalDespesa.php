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

                            // $despesas: exibir tabela HTML
                            foreach ($despesas as $despesa) {
                                //Tabela para exibir as Despesas com Formulário de Editar
                                echo "<tr>";
                                echo "<form method='post' action='processos/alterarDespesa.php'>";
                                echo "<input type='hidden' name='DespesaID' value='" . $despesa['DespesaID'] . "'>";
                                echo "<td><input type='text' class='form-control' name='descricao' value='" . $despesa['Descricao'] . "' required></td>";
                                echo "<td><input type='number' step='0.01' class='form-control' name='valor' value='" . $despesa['Valor'] . "' required></td>";
                                echo "<td><select class='form-select' name='categoria' required>";
                                echo "<option value=''>Selecione uma categoria</option>";
                                echo "<option value='Alimentação'" . ($despesa['Categoria'] == 'Alimentação' ? ' selected' : '') . ">Alimentação</option>";
                                echo "<option value='Transporte'" . ($despesa['Categoria'] == 'Transporte' ? ' selected' : '') . ">Transporte</option>";
                                echo "<option value='Moradia'" . ($despesa['Categoria'] == 'Moradia' ? ' selected' : '') . ">Moradia</option>";
                                echo "<option value='Educação'" . ($despesa['Categoria'] == 'Educação' ? ' selected' : '') . ">Educação</option>";
                                echo "<option value='Outros'" . ($despesa['Categoria'] == 'Outros' ? ' selected' : '') . ">Outros</option>";
                                echo "</select></td>";
                                echo "<td><input type='date' class='form-control' name='dataDespesa' value='" . $despesa['DataDespesa'] . "' required></td>";
                                echo "<td><select class='form-select' name='status' required>";
                                echo "<option value=''>Selecione um status</option>";
                                echo "<option value='Paga'" . ($despesa['StatusDespesa'] == 'Paga' ? ' selected' : '') . ">Paga</option>";
                                echo "<option value='Não Paga'" . ($despesa['StatusDespesa'] == 'Não Paga' ? ' selected' : '') . ">Não Paga</option>";
                                echo "</select></td>";
                                echo "<td>";
                                echo "<button type='submit' class='btn btn-warning btn-sm'>Alterar</button>";
                                echo "</form>";
                                echo "<form method='post' action='processos/excluirDespesa.php' style='display:inline;'>";
                                echo "<input type='hidden' name='DespesaID' value='" . $despesa['DespesaID'] . "'>";
                                echo "<button type='submit' class='btn btn-danger btn-sm'>Excluir</button>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            // Caso $_SESSION['despesas'] não esteja definida,tratar isso conforme necessário
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