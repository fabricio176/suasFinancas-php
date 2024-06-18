<div class="container" id="tabelaDespesas" style="display:none;">
    <h2 class="bold text-center">Relatórios Despesas</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">Categoria</th>
                <th scope="col">Data da Despesa</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($despesas as $despesa): ?>
                <tr>
                    <td><?php echo $despesa['DespesaID']; ?></td>
                    <td><?php echo $despesa['Descricao']; ?></td>
                    <td><?php echo $despesa['Valor']; ?></td>
                    <td><?php echo $despesa['Categoria']; ?></td>
                    <td class="data-despesa"><?php echo $despesa['DataDespesa']; ?></td>
                    <td><?php echo $despesa['StatusDespesa']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>