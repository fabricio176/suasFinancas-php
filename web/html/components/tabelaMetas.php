<div class="container" id="tabelaMetas" style="display:none;">
    <h2 class="bold text-center">Relatórios Metas</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">Prazo </th>
                <th scope="col">Tipo</th>
                <th scope="col">Data de Inicio </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($metas as $meta): ?>
                <tr>
                    <td><?php echo $meta['MetaID']; ?></td>
                    <td><?php echo $meta['Descricao']; ?></td>
                    <td><?php echo $meta['ValorAlvo']; ?></td>
                    <td><?php echo $meta['Prazo']; ?></td>
                    <td><?php echo $meta['Tipo']; ?></td>
                    <td class="data-meta"><?php echo $meta['DataInicio']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>