<?php
session_start();
if (!isset($_SESSION['Nome'])) {
    // Redireciona para a página de login se o nome do usuário não estiver na sessão
    header("Location: ../../index.php");
    exit();
}

// Array associativo com os meses e seus nomes
$meses = array(
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorios - SuasFinanças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/index.css">
</head>

<body>

    <!-- ----------------------- MAIN PAGE ------------------- -->
    <div class="container-fluid m-0 p-0 " id="page">

        <!-- ---------- HEADER -------- -->
        <header>
            <nav class="navbar navbar-expand-sm bg-dark py-4">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="navbar-item"><a href="index.php"><img src="assets/logoWhite.svg" alt="" height="100%"></a>
                        </li>
                        <li class="navbar-item"><a href="dashboard.php" class="nav-link text-white">Dashboard</a>
                        </li>
                        <li class="navbar-item"><a href="despesas.php" class="nav-link text-white">Despesas</a></li>
                        <li class="navbar-item"><a href="metasFinanceiras.php" class="nav-link text-white">Metas
                                Financeiras</a>
                        </li>
                        <li class="navbar-item"><a href="pagamentos.php" class="nav-link text-white">Pagamentos</a>
                        </li>
                        <li class="navbar-item"><a href="relatorios.php" class="nav-link text-warning">Relatórios</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="navbar-item"><button class="btn btn-outline text-white border-white" data-bs-toggle="modal" data-bs-target="#popUpLogin"> MEU PERFIL
                            </button></li>
                        <li class="navbar-item"><button class="btn btn-outline text-white border-white"> SAIR
                            </button></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ---------- HEADER -------- -->

        <!-- MAIN RELATORIOS -->
        <main>
            <div class="container my-5">
                <h1 class="bold text-center">Relatórios</h1>
                <hr>
                <form method="post" action="processos/gerarRelatorios.php">
                    <!-- Opções de Filtro -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="filtroTipo" class="form-label">Filtrar por Tipo:</label>
                            <select class="form-select" id="filtroTipo" name="filtroTipo">
                                <option value="">Todos os Tipos</option>
                                <option value="Despesas">Relatório de Despesas</option>
                                <option value="Metas">Relatório de Metas</option>
                                <option value="Pagamentos">Relatório de Pagamentos</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="filtroMes" class="form-label">Filtrar por Mês:</label>
                            <select class="form-select" id="filtroMes" name="filtroMes">
                                <option value="">Todos os Meses</option>
                                <?php foreach ($meses as $mes => $nomeMes) : ?>
                                    <option value="<?php echo $mes; ?>"><?php echo $nomeMes; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success"> GERAR RELATÓRIOS</button>
                </form>
            </div>
            <!-- TABELA DESPESAS -->
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
            </table>

            <?php foreach ($despesas as $despesa) {
                echo "<tr>";
                    echo "<td>" . $despesa['DespesaID'] . "</td>";
                    echo "<td>" . $despesa['Descricao'] . "</td>";
                    echo "<td>" . $despesa['Valor'] . "</td>";
                    echo "<td>" . $despesa['DespesaID'] . "</td>";
                    echo "<td>" . $despesa['DespesaID'] . "</td>";
                    echo "<td>" . $despesa['DespesaID'] . "</td>";
            }
            ?>
            <!-- TABELA DESPESAS -->

            <!-- TABELA METAS -->

            <!-- TABELA METAS -->

            <!-- TABELA PAGAMENTOS -->

            <!-- TABELA PAGAMENTOS -->

    </div>
    </main>

    <!-- MAIN RELATORIOS -->

    <!-- ---------- FOOTER -------- -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            Todos os direitos reservados a SuasFinanças!
        </div>
    </footer>
    <!-- ---------- FOOTER -------- -->
    </div>
    <!-- ----------------------- MAIN PAGE ------------------- -->

    <!-- ----------------------- SCRIPT ------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- ----------------------- SCRIPT ------------------- -->
</body>

</html>