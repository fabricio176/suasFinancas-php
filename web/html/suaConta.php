<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Conta - SuasFinanças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <!-- ----------------------- MAIN PAGE ------------------- -->
    <div class="container-fluid m-0 p-0 " id="page">

        <!-- ---------- HEADER -------- -->
        <header>
            <nav class="navbar navbar-expand-sm bg-dark py-4">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="navbar-item"><a href="#"><img src="assets/logoWhite.svg" alt="" height="100%"></
                                    </li>
                        <li class="navbar-item"><a href="../../index.php" class="nav-link text-white">Home</a></li>
                        <li class="navbar-item"><a href="ajuda.php" class="nav-link text-white">Ajuda</a></li>
                        <li class="navbar-item"><a href="suasMetas.php" class="nav-link text-white">Suas Metas</a></li>
                        <li class="navbar-item"><a href="suaConta.php" class="nav-link text-warning">Sua Conta</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="navbar-item"><button class="btn btn-outline text-white border-white"
                                data-bs-toggle="modal" data-bs-target="#popUpLogin"> LOGIN
                            </button></li>
                        <li class="navbar-item"><button class="btn btn-outline text-white border-white"
                                data-bs-toggle="modal" data-bs-target="#popUpSignIn"> CADASTRE-SE
                            </button></li>
                    </ul>
                </div>
            </nav>
            <!-- MODAL SIGIN -->
            <?php include 'components/modalSignIn.php'; ?>
            <!-- MODAL SIGIN -->

            <!-- MODAL LOGIN -->
            <?php include 'components/modalLogin.php'; ?>
            <!-- MODAL LOGIN -->
        </header>
        <!-- ---------- HEADER -------- -->

        <!-- ---------- MAIN -------- -->
        <main>
            <!-- SUA CONTA CONTENT -->
            <div class="container my-5">
                <h1 class="bold text-center">Gerencie Sua Conta com Facilidade</h1>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2 class="bold">Benefícios de Ter Uma Conta no SuasFinanças</h2>
                        <br>
                        <ul>
                            <li>Controle total sobre suas finanças pessoais em um único lugar.</li>
                            <li>Realize pagamentos e transferências de forma rápida e segura.</li>
                            <li>Gerencie múltiplas contas e cartões em um só aplicativo.</li>
                            <li>Acompanhe suas transações em tempo real com notificações instantâneas.</li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#popUpSignIn">Abra Sua Conta Agora</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="../assets/account-image.jpg" alt="Imagem de conta" class="img-fluid">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2 class="bold">Facilidade e Segurança</h2>
                        <br>
                        <p>Nosso aplicativo oferece:</p>
                        <ul>
                            <li>Interface intuitiva para uma experiência de usuário agradável.</li>
                            <li>Proteção avançada de dados para manter suas informações seguras.</li>
                            <li>Suporte dedicado para ajudá-lo com qualquer dúvida ou problema.</li>
                            <li>Atualizações regulares com novos recursos e melhorias contínuas.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2 class="bold">Mais do Que Um Sistema de Controle financeiro</h2>
                        <br>
                        <p>o SuasFinanças oferece:</p>
                        <ul>
                            <li>Planejamento financeiro personalizado para atingir suas metas.</li>
                            <li>Investimentos e opções de poupança para aumentar seu patrimônio.</li>
                            <li>Relatórios detalhados para entender melhor seus hábitos financeiros.</li>
                            <li>Integração com serviços financeiros adicionais para conveniência total.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <!-- ---------- MAIN -------- -->

        <!-- ---------- FOOTER -------- -->
        <footer class="bg-dark">
            <div class="container">
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