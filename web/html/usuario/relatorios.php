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

// Atribui $_SESSION['despesas'] a $despesas
$despesas = isset($_SESSION['despesas']) ? $_SESSION['despesas'] : [];
// Atribui $_SESSION['metasDashboard'] a $metasDashboard
$metas = isset($_SESSION['metasDashboard']) ? $_SESSION['metasDashboard'] : [];

// Atribui $_SESSION['pagamentosDashboard'] a $pagamentosDashboard
$pagamentos = isset($_SESSION['pagamentosDashboard']) ? $_SESSION['pagamentosDashboard'] : [];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios - SuasFinanças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                        <li class="navbar-item"><a href="index.php"><img src="assets/logoWhite.svg" alt=""
                                    height="100%"></a>
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
                        <li class="navbar-item"><button class="btn btn-outline text-white border-white"
                                data-bs-toggle="modal" data-bs-target="#popUpLogin"> MEU PERFIL
                            </button></li>
                        <li class="nav-item">
                            <a class="btn btn-danger" href="../../../index.php">SAIR</a>
                        </li>
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
                                <option value="0">Todos os Meses</option>
                                <?php foreach ($meses as $mes => $nomeMes): ?>
                                    <option value="<?php echo $mes; ?>"><?php echo $nomeMes; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
            <!-- TABELA DESPESAS -->

            <?php include '../components/tabelaDespesas.php'; ?>
            <!-- TABELA DESPESAS -->

            <!-- TABELA METAS -->
            <?php include '../components/tabelaMetas.php'; ?>
            <!-- TABELA METAS -->

            <!-- TABELA PAGAMENTOS -->
            <?php include '../components/tabelaPagamentos.php'; ?>
            <!-- TABELA PAGAMENTOS -->

            <!-- MODAL MEU PERFIL -->
            <?php include '../components/modalMeuPerfil.php'; ?>
            <!-- MODAL MEU PERFIL -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>

    <script>
        const tabelaDespesas = document.getElementById("tabelaDespesas");
        const tabelaMetas = document.getElementById("tabelaMetas");
        const tabelaPagamentos = document.getElementById("tabelaPagamentos");
        const tipoRelatorio = document.getElementById("filtroTipo");
        const mesRelatorio = document.getElementById("filtroMes");

        function exibirRelatorios() {
            const tipo = tipoRelatorio.value;
            const mes = parseInt(mesRelatorio.value);

            // Ocultar todas as tabelas
            tabelaDespesas.style.display = 'none';
            tabelaMetas.style.display = 'none';
            tabelaPagamentos.style.display = 'none';

            // Função para exibir linhas de tabela com base no mês
            function filtrarPorMes(tabelaId, dataClass) {
                const tabela = document.getElementById(tabelaId);
                const linhas = tabela.querySelectorAll("tbody tr");

                linhas.forEach(linha => {
                    const data = linha.querySelector(`.${dataClass}`).innerText;
                    const mesDespesa = new Date(data).getMonth() + 1;

                    if (mes === 0 || mesDespesa === mes) {
                        linha.style.display = "";
                    } else {
                        linha.style.display = "none";
                    }
                });
            }

            // Exibir a tabela de acordo com o tipo selecionado
            if (tipo === 'Despesas') {
                tabelaDespesas.style.display = 'block';
                filtrarPorMes("tabelaDespesas", "data-despesa");
            } else if (tipo === 'Metas') {
                tabelaMetas.style.display = 'block';
                filtrarPorMes("tabelaMetas", "data-meta");
            } else if (tipo === 'Pagamentos') {
                tabelaPagamentos.style.display = 'block';
                filtrarPorMes("tabelaPagamentos", "data-pagamento");
            } else {
                // Se nenhum tipo específico foi selecionado, exibir todas as tabelas e filtrar
                tabelaDespesas.style.display = 'block';
                tabelaMetas.style.display = 'block';
                tabelaPagamentos.style.display = 'block';

                filtrarPorMes("tabelaDespesas", "data-despesa");
                filtrarPorMes("tabelaMetas", "data-meta");
                filtrarPorMes("tabelaPagamentos", "data-pagamento");
            }
        }

        // Adicionar evento de mudança aos selects
        tipoRelatorio.addEventListener("change", exibirRelatorios);
        mesRelatorio.addEventListener("change", exibirRelatorios);
    </script>

    <!-- ----------------------- SCRIPT ------------------- -->
</body>

</html>