<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuasFinanças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="web/css/index.css">
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
                        <li class="navbar-item"><a href="index.php" class="nav-link text-warning">Home</a></li>
                        <li class="navbar-item"><a href="web/html/ajuda.php" class="nav-link text-white">Ajuda</a></li>
                        <li class="navbar-item"><a href="web/html/suasMetas.php" class="nav-link text-white">Suas Metas</a>
                        </li>
                        <li class="navbar-item"><a href="web/html/suaConta.php" class="nav-link text-white">Sua Conta</a>
                        </li>
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
            <div class="modal" id="popUpLogin">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- MODAL HEADER -->
                        <div class="modal-header d-flex justify-content-center">
                            <h3>LOGIN</h3>
                        </div>
                        <!-- MODAL HEADER -->

                        <!-- MODAL BODY -->
                        <div class="modal-body">
                            <form action="web/html/usuario/processos/login.php" method="post">
                                <div class="form-group my-3">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="Digite seu email">
                                </div>
                                <div class="form-group my-3">
                                    <label for="password">Senha</label>
                                    <input autocomplete="off" class="form-control" type="password" name="senha"
                                        id="senha" placeholder="Digite sua senha">
                                </div>
                                <button class="btn btn-warning" type="reset">Limpar</button>
                                <button class="btn btn-success" type="submit">Enviar</button>
                            </form>
                        </div>
                        <!-- MODAL BODY -->

                        <!-- MODAL FOOTER -->
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        </div>
                        <!-- MODAL FOOTER -->
                    </div>
                </div>
            </div>
            <!-- MODAL LOGIN -->

            <!-- MODAL SIGIN -->
            <div class="modal" id="popUpSignIn">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- MODAL HEADER -->
                        <div class="modal-header d-flex justify-content-center">
                            <h3>Cadastre-se</h3>
                        </div>
                        <!-- MODAL HEADER -->

                        <!-- MODAL BODY -->
                        <div class="modal-body">
                            <form action="web/html/usuario/processos/cadastro.php" method="post">
                                <div class="form-group my-3">
                                    <label for="name">Nome</label>
                                    <input class="form-control" type="text" name="nome" id="nome"
                                        placeholder="Digite seu nome">
                                </div>

                                <div class="form-group my-3">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="Digite seu email">
                                </div>
                                <div class="form-group my-3">
                                    <label for="password">Senha</label>
                                    <input autocomplete="off" class="form-control" type="password" name="senha"
                                        id="senha" placeholder="Digite sua senha">
                                </div>
                                <button class="btn btn-warning" type="reset">Limpar</button>
                                <button class="btn btn-success" type="submit">Enviar</button>
                            </form>
                        </div>
                        <!-- MODAL BODY -->

                        <!-- MODAL FOOTER -->
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        </div>
                        <!-- MODAL FOOTER -->
                    </div>
                </div>
            </div>
            <!-- MODAL SIGIN -->
        </header>
        <!-- ---------- HEADER -------- -->

        <!-- ---------- MAIN -------- -->
        <main>
            <!-- CAROUSEL -->
            <div class="carousel slide my-3" id="demo" data-bs-ride="carousel">
                <!-- CONTROLLERS -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <!-- SLIDER -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="web/assets/banner7.jpg" alt="" class="d-block" style="width: 100%; height:700px">
                    </div>
                    <div class="carousel-item">
                        <img img src="web/assets/banner.jpg" alt="" class="d-block" style="width: 100%; height:700px">
                    </div>
                    <div class="carousel-item">
                        <img src="web/assets/banner4.jpg" alt="" class="d-block" style="width: 100% ; height:700px">
                    </div>
                </div>
                <!-- ARROW INDICATOR -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <!-- ARROW INDICATOR -->

            </div>
            <!-- CAROUSEL -->

            <!-- MIDDLE(PAYMENT) -->
            <div class="container">
                <div class="row text-center d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <h2 class="bold">ESCOLHA SUA FORMA DE PAGAMENTO PREFERIDA</h2>
                        <hr>
                    </div>
                </div>
                <div class="row d-flex justify-content-center my-5">
                    <div class="col-3 mx-3">
                        <div class="card p-5" style="height: 400px ;">
                            <img src="web/assets/codigoDeBarras.svg" alt="">
                            <div class="card-body text-center ">
                                <h3 class="card-title bold">BOLETO</h3>
                                <p class="card-text">Processamento em até 48 Horas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card p-5" style="height: 400px ;">
                            <img src="web/assets/CartaoDeCredito.svg" alt="Código de Barras">
                            <div class="card-body text-center">
                                <h3 class="card-title bold">CARTÃO</h3>
                                <p class="card-text">Divida em até 24 vezes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mx-3">
                        <div class="card p-5" style="height: 400px ;">
                            <img src="web/assets/Dinheiro.svg" alt="Icone de cartão de crédito">
                            <div class="card-body text-center">
                                <h3 class="card-title bold">DINHEIRO</h3>
                                <p class="card-text">15% de Desconto!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SERVICE SECTION -->
            <div class="container-fluid d-flex mb-4" style="background-color: #302727;  height: 430px;">
                <div class="container text-white" style="width: 50%; ">
                    <h1 class="bold mt-5" style="text-align: justify;">O aplicativo de controle financeiro</h1>
                    <p class="mt-4" style="width: 80%;">O SuasFinanças é uma solução completa para gerenciar suas
                        finanças de forma eficiente. Ele oferece um gerenciador de gastos intuitivo para registrar e
                        categorizar suas transações, suporte a metas financeiras para estabelecer e acompanhar
                        objetivos, e contas de poupança virtuais para guardar dinheiro. Organize suas despesas por
                        categorias personalizadas e visualize relatórios e gráficos claros para um planejamento
                        financeiro eficaz.</p>
                </div>
                <div class="container" style="width: 50%;">
                    <img class="m-3 p-0" src="web/assets/bannerBeneficios.jpg" alt="" style="width:100%; height: 90%;">
                </div>
            </div>
            <h1 class="bold" style="text-align: center;">SEJA CLIENTE DE DIVERSAS MANEIRAS!</h1>
            <div class="container d-flex" style="width: 100%; height: 400px;">
                <div class="container m-5" id="clientImg1" style="width: 30%; height: 80%;">
                </div>
                <div class="container my-5" id="clientImg2" style="width: 30%; height: 80%;">
                </div>
                <div class="container m-5" id="clientImg3" style="width: 30%; height: 80%;">
                </div>
            </div>
            <div class="container bg-white shadow-lg p-3 mb-5 bg-dark rounded" style="width:55% ;height:auto;">
                <!-- TABLE -->
                <table class="table text-white" id="tableform">
                    <h2 class="bold pt-3 pb-2 text-white">Horários de atendimento</h2>
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">SEGUNDA</th>
                            <th scope="col">TERÇA</th>
                            <th scope="col">QUARTA</th>
                            <th scope="col">QUINTA</th>
                            <th scope="col">SEXTA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Marcelo</th>
                            <td>09:00 até as 13:00</td>
                            <td>08:00 até as 12:00</td>
                            <td>09:00 até as 14:00</td>
                            <td>09:00 até as 12:00</td>
                            <td>09:00 até as 12:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Daniela</th>
                            <td>09:00 até as 13:00</td>
                            <td>08:00 até as 12:00</td>
                            <td>09:00 até as 14:00</td>
                            <td>09:00 até as 12:00</td>
                            <td>09:00 até as 12:00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row">João</th>
                            <td>09:00 até as 13:00</td>
                            <td>08:00 até as 12:00</td>
                            <td>09:00 até as 14:00</td>
                            <td>09:00 até as 12:00</td>
                            <td>09:00 até as 12:00</td>
                        </tr>
                    </tfoot>
                </table>
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