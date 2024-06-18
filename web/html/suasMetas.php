<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suas Metas - SuasFinanças</title>
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
                        <li class="navbar-item"><a href="#"><img src="assets/logoWhite.svg" alt="" height="100%"></a>
                        </li>
                        <li class="navbar-item"><a href="../../index.php" class="nav-link text-white">Home</a></li>
                        <li class="navbar-item"><a href="ajuda.php" class="nav-link text-white">Ajuda</a></li>
                        <li class="navbar-item"><a href="suasMetas.php" class="nav-link text-warning">Suas Metas</a>
                        </li>
                        <li class="navbar-item"><a href="suaConta.php" class="nav-link text-white">Sua Conta</a></li>
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
            <!-- MODAL LOGIN -->
            <?php include 'components/modalLogin.php'; ?>
            <!-- MODAL LOGIN -->

             <!-- MODAL SIGIN -->
             <?php include 'components/modalSignIn.php'; ?>
            <!-- MODAL SIGIN -->
        </header>
        <!-- ---------- HEADER -------- -->

        <!-- ---------- MAIN -------- -->
        <main>
            <!-- METAS CONTENT -->
            <div class="container my-5">
                <h1 class="bold text-center">Defina e Alcance Suas Metas Financeiras</h1>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2 class="bold">Por que Definir Metas?</h2>
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
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#popUpSignIn">Comece Agora</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="../assets/goals-image.jpg" alt="Imagem de metas" class="img-fluid">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2 class="bold">Dicas para Alcançar Suas Metas</h2>
                        <br>
                        <p>Utilize nossas dicas para aumentar suas chances de sucesso:</p>
                        <ul>
                            <li>Crie um orçamento mensal detalhado.</li>
                            <li>Economize automaticamente com depósitos programados.</li>
                            <li>Revise regularmente suas metas e ajuste conforme necessário.</li>
                            <li>Celebre suas conquistas ao atingir cada marco.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2 class="bold">Benefícios Adicionais</h2>
                        <br>
                        <p>Além de gerenciar suas metas financeiras, o SuasFinanças oferece:</p>
                        <ul>
                            <li>Segurança e facilidade na gestão de suas finanças pessoais.</li>
                            <li>Relatórios personalizados para uma visão clara de suas finanças.</li>
                            <li>Integração com diversas formas de pagamento para conveniência.</li>
                            <li>Suporte dedicado para ajudá-lo em cada etapa do caminho.</li>
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