<?php
session_start();
if (!isset($_SESSION['Nome'])) {
    // Redireciona para a página de login se o nome do usuário não estiver na sessão
    header("Location: ../../index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem Vindo - SuasFinanças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/index.css">
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
                        <li class="navbar-item"><a href="relatorios.php" class="nav-link text-white">Relatórios</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="navbar-item"><button class="btn btn-outline text-white border-white"
                                data-bs-toggle="modal" data-bs-target="#popUpLogin"> MEU PERFIL</button></li>
                        <li class="nav-item">
                            <a class="btn btn-danger" href="../../../index.php">SAIR</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ---------- HEADER -------- -->

        <!-- MODAL MEU PERFIL -->
        <?php include '../components/modalMeuPerfil.php'; ?>
        <!-- MODAL MEU PERFIL -->

        <!-- ---------- MAIN -------- -->
        <main>
            <!-- BOAS VINDAS CONTENT -->
            <div class="container my-5">
                <h1 class="bold text-center">Bem-vindo(a), <?php echo htmlspecialchars($_SESSION['Nome']); ?>!</h1>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h2 class="bold text-center">Gerencie Suas Finanças com Facilidade</h2>
                        <br>
                        <p>Com o SuasFinanças, você tem controle total sobre suas finanças pessoais. Aproveite os
                            seguintes benefícios:</p>
                        <ul>
                            <li>Controle total sobre suas finanças pessoais em um único lugar.</li>
                            <li>Realize pagamentos e transferências de forma rápida e segura.</li>
                            <li>Gerencie múltiplas contas e cartões em um só aplicativo.</li>
                            <li>Acompanhe suas transações em tempo real com notificações instantâneas.</li>
                        </ul>
                        <div class="text-center">
                            <a href="despesas.php" class="btn btn-warning">Explorar Recursos</a>
                        </div>
                    </div>
                    <div class="container-fluidcol-md-6 d-flex align-items-center justify-content-center">
                        <img src="../../assets/account-image2.jpg" alt="Imagem de conta" class="img-fluid"
                            style="height: 1005;">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2 class="bold text-center">Defina e Alcance Suas Metas Financeiras</h2>
                        <br>
                        <p>Estabelecer metas financeiras é essencial para um planejamento financeiro sólido. Com o
                            SuasFinanças, você pode:</p>
                        <ul>
                            <li>Visualizar suas metas em um painel intuitivo.</li>
                            <li>Acompanhar o progresso com gráficos e relatórios detalhados.</li>
                            <li>Receber notificações sobre prazos e conquistas.</li>
                            <li>Ajustar suas metas conforme suas necessidades financeiras mudam.</li>
                        </ul>
                        <div class="text-center">
                            <a href="metasFinanceiras.php" class="btn btn-warning">Comece Agora</a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="../../assets/goals-image.jpg" alt="Imagem de metas" class="img-fluid">
                    </div>
                </div>
            </div>
        </main>


        <!-- ---------- MAIN -------- -->

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
    <!-- ----------------------- SCRIPT ------------------- -->
</body>

</html>