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
            <?php foreach ($pagamentos as $pagamento) : ?>
                <tr>
                    <td><?php echo $pagamento['PagamentoID']; ?></td>
                    <td>
                        <?php
                        //buscar a Descrição da Despesa associada ao Pagamento
                        $despesa_id = $pagamento['DespesaID'];
                        $descricao_despesa = ""; // Inicializa a variável

                        //buscar a Descrição da Despesa associada ao Pagamento
                        foreach ($despesas as $despesa) {
                            if ($despesa['DespesaID'] == $despesa_id) {
                                $descricao_despesa = $despesa['Descricao'];
                                break; // Achou a despesa, podemos sair do loop
                            }
                        }

                        echo $descricao_despesa;
                        ?>
                    </td>
                    <td><?php echo $pagamento['Valor']; ?></td>
                    <td class="data-pagamento"><?php echo $pagamento['DataPagamento']; ?></td>
                    <td><?php echo $pagamento['MetodoPagamento']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>