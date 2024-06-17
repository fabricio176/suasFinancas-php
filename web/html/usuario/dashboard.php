<?php
session_start();
if (!isset($_SESSION['Nome'])) {
    // Redireciona para a página de login se o nome do usuário não estiver na sessão
    header("Location: ../../index.php");
    exit();
}

// Atribui $_SESSION['despesas'] a $despesas
$despesasDashboard = isset($_SESSION['despesasDashboard']) ? $_SESSION['despesasDashboard'] : [];
$metasDashboard = isset($_SESSION['metasDashboard']) ? $_SESSION['metasDashboard'] : [];
$pagamentosDashboard = isset($_SESSION['despesasDashboard']) ? $_SESSION['pagamentosDashboard'] : [];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SuasFinanças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <li class="navbar-item"><a href="dashboard.php" class="nav-link text-warning">Dashboard</a>
                        </li>
                        <li class="navbar-item"><a href="despesas.php" class="nav-link text-white">Despesas</a></li>
                        <li class="navbar-item"><a href="metasFinanceiras.php" class="nav-link text-white">Metas
                                Financeiras</a>
                        </li>
                        <li class="navbar-item"><a href="pagamentos.php" class="nav-link text-white">Pagamentos</a>
                        </li>
                        <li class="navbar-item"><a href="relatorios.php" class="nav-link text-white">Relatórios</a>
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

        <!-- MAIN DASHBOARD CONTENT -->
        <main class="container my-5">
            <h1 class="bold text-center">Dashboard</h1>
            <hr>

            <!-- Gráfico de Despesas -->
            <h2>Despesas</h2>
            <div class="chart-container" style="width: 100%; max-width:600px; margin: 0 auto;">
                <canvas id="despesasChart" class="chart"></canvas>
            </div>
            <hr>

            <!-- Gráfico de Metas Financeiras -->
            <h2>Metas Financeiras</h2>
            <div class="chart-container" style="width: 100%; max-width:300px; margin: 0 auto;">
                <canvas id="metasChart" class="chart"></canvas>
            </div>
            <hr>

            <!-- Gráfico de Pagamentos -->
            <h2>Pagamentos</h2>
            <div class="chart-container" style="width: 100%; max-width:300px; margin: 0 auto;">
                <canvas id="pagamentosChart" class="chart"></canvas>
            </div>
            <hr>

            <!-- Mais tabelas -->
        </main>

        </main>

        <!-- MAIN -->

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
    <script>
        // Converte os dados do PHP para o JavaScript
        const despesasData = <?php echo json_encode($despesasDashboard); ?>;
        const metasData = <?php echo json_encode($metasDashboard); ?>;
        const pagamentosData = <?php echo json_encode($pagamentosDashboard); ?>;

        // Função para gerar o gráfico de despesas
        function gerarGraficoDespesas(data) {
            const ctx = document.getElementById('despesasChart').getContext('2d');
            const categorias = [...new Set(data.map(item => item.Categoria))];
            const valores = categorias.map(categoria => {
                return data.filter(item => item.Categoria === categoria)
                    .reduce((total, item) => total + parseFloat(item.Valor), 0);
            });

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: categorias,
                    datasets: [{
                        label: 'Despesas por Categoria',
                        data: valores,
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Função para gerar o gráfico de metas financeiras
        function gerarGraficoMetas(data) {
            const ctx = document.getElementById('metasChart').getContext('2d');
            const tipos = [...new Set(data.map(item => item.Tipo))];
            const valores = tipos.map(tipo => {
                return data.filter(item => item.Tipo === tipo)
                    .reduce((total, item) => total + parseFloat(item.ValorAlvo), 0);
            });

            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: tipos,
                    datasets: [{
                        label: 'Metas por Tipo',
                        data: valores,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(75, 192, 192, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        }

        // Função para gerar o gráfico de pagamentos
        function gerarGraficoPagamentos(data) {
            const ctx = document.getElementById('pagamentosChart').getContext('2d');
            const metodos = [...new Set(data.map(item => item.MetodoPagamento))];
            const valores = metodos.map(metodo => {
                return data.filter(item => item.MetodoPagamento === metodo)
                    .reduce((total, item) => total + parseFloat(item.Valor), 0);
            });

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: metodos,
                    datasets: [{
                        label: 'Pagamentos por Método',
                        data: valores,
                        backgroundColor: [
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        }

        // Gera os gráficos
        gerarGraficoDespesas(despesasData);
        gerarGraficoMetas(metasData);
        gerarGraficoPagamentos(pagamentosData);
    </script>
    <!-- ----------------------- SCRIPT ------------------- -->
</body>

</html>