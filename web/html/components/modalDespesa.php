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
                        <?php if (isset($_SESSION['despesas'])): ?>
                            <?php foreach ($despesas as $despesa): ?>
                                <tr>
                                    <form method="post" action="processos/alterarDespesa.php">
                                        <input type="hidden" name="DespesaID" value="<?php echo $despesa['DespesaID']; ?>">
                                        <td><input type="text" class="form-control" name="descricao" value="<?php echo $despesa['Descricao']; ?>" required></td>
                                        <td><input type="number" step="0.01" class="form-control" name="valor" value="<?php echo $despesa['Valor']; ?>" required></td>
                                        <td>
                                            <select class="form-select" name="categoria" required>
                                                <option value="">Selecione uma categoria</option>
                                                <option value="Alimentação" <?php echo ($despesa['Categoria'] == 'Alimentação') ? 'selected' : ''; ?>>Alimentação</option>
                                                <option value="Transporte" <?php echo ($despesa['Categoria'] == 'Transporte') ? 'selected' : ''; ?>>Transporte</option>
                                                <option value="Moradia" <?php echo ($despesa['Categoria'] == 'Moradia') ? 'selected' : ''; ?>>Moradia</option>
                                                <option value="Educação" <?php echo ($despesa['Categoria'] == 'Educação') ? 'selected' : ''; ?>>Educação</option>
                                                <option value="Outros" <?php echo ($despesa['Categoria'] == 'Outros') ? 'selected' : ''; ?>>Outros</option>
                                            </select>
                                        </td>
                                        <td><input type="date" class="form-control" name="dataDespesa" value="<?php echo $despesa['DataDespesa']; ?>" required></td>
                                        <td>
                                            <select class="form-select" name="status" required>
                                                <option value="">Selecione um status</option>
                                                <option value="Paga" <?php echo ($despesa['StatusDespesa'] == 'Paga') ? 'selected' : ''; ?>>Paga</option>
                                                <option value="Não Paga" <?php echo ($despesa['StatusDespesa'] == 'Não Paga') ? 'selected' : ''; ?>>Não Paga</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-warning btn-sm">Alterar</button>
                                    </form>
                                    <form method="post" action="processos/excluirDespesa.php" style="display:inline;">
                                        <input type="hidden" name="DespesaID" value="<?php echo $despesa['DespesaID']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                    </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">Não há despesas para exibir.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
