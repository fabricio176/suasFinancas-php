<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda - SuasFinanças</title>
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
                        <li class="navbar-item"><a href="ajuda.php" class="nav-link text-warning">Ajuda</a></li>
                        <li class="navbar-item"><a href="suasMetas.php" class="nav-link text-white">Suas Metas</a></li>
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
            <!-- HELP CONTENT -->
            <div class="container my-5">
                <h1 class="bold text-center">Página de Ajuda</h1>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2 class="bold">Como usar o SuasFinanças?</h2>
                        <br>
                        <p>O SuasFinanças é um aplicativo completo para gerenciar suas finanças pessoais. Aqui estão
                            alguns passos simples para começar:</p>
                        <ol>
                            <li>Registre suas transações financeiras diárias usando o gerenciador de gastos.</li>
                            <li>Categorize suas despesas e receitas para uma melhor organização.</li>
                            <li>Defina metas financeiras para economias específicas ou pagamentos a longo prazo.</li>
                            <li>Use contas de poupança virtuais para separar dinheiro para diferentes propósitos.</li>
                            <li>Visualize relatórios e gráficos para entender melhor seus hábitos financeiros.</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <img src="../assets/help-image.jpg" alt="Imagem de ajuda" class="img-fluid"
                            style="height:100%;">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2 class="bold">Perguntas Frequentes</h2>
                        <br>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Como posso adicionar uma nova transação?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Para adicionar uma nova transação, vá para a seção de gerenciamento de gastos
                                        e clique no botão "Nova Transação". Preencha os detalhes necessários e
                                        salve.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Como posso definir uma meta financeira?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Para definir uma meta financeira, vá para a seção de metas financeiras e
                                        clique no botão "Nova Meta". Insira os detalhes da meta, como o valor a
                                        ser economizado e a data limite.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="bold">Entre em Contato</h2>
                        <br>
                        <p>Se você tiver alguma dúvida ou precisar de assistência adicional, entre em contato
                            conosco através dos seguintes canais:</p>
                        <ul>
                            <li>Email: contato@suasfinancas.com</li>
                            <li>Telefone: (61) 3131-3131</li>
                            <li>Chat ao vivo disponível durante o horário comercial.</li>
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