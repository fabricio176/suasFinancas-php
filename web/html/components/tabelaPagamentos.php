<div class="container" id="tabelaPagamentos" style="display:none;">
    <h2 class="bold text-center">Relatórios Pagamentos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Despesa</th>
                <th scope="col">Valor</th>
                <th scope="col">Data de Pagamento</th>
                <th scope="col">Metodo de Pagamento </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pagamentos as $pagamento): ?>
                <tr>
                    <td><?php echo $pagamento['PagamentoID']; ?></td>
                    <td>
                        <?php echo $despesa['Descricao']; ?>
                    </td>
                    <td><?php echo $pagamento['Valor']; ?></td>
                    <td class="data-pagamento"><?php echo $pagamento['DataPagamento']; ?></td>
                    <td><?php echo $pagamento['MetodoPagamento']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>