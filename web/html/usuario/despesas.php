<?php
session_start();
if (!isset($_SESSION['Nome'])) {
    // Redireciona para a página de login se o nome do usuário não estiver na sessão
    header("Location: ../../index.php");
    exit();
}

// Atribui $_SESSION['despesas'] a $despesas
$despesas = isset($_SESSION['despesas']) ? $_SESSION['despesas'] : [];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despesas - SuasFinanças</title>
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
                        <li class="navbar-item"><a href="despesas.php" class="nav-link text-warning">Despesas</a></li>
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
                                data-bs-toggle="modal" data-bs-target="#popUpLogin"> MEU PERFIL
                            </button></li>
                        <li class="navbar-item"><button class="btn btn-outline text-white border-white"> SAIR
                            </button></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ---------- HEADER -------- -->
        <!-- ---------- MAIN -------- -->
        <!-- DESPESAS CONTENT -->
        <main>
            <div class="container my-5">
                <h1 class="bold text-center">Registre suas Contas ou Despesas</h1>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-6 mx-auto">
                        <form method="post" action="processos/cadastroDespesas.php">
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" required>
                            </div>
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor</label>
                                <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
                            </div>
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoria</label>
                                <select class="form-select" id="categoria" name="categoria" required>
                                    <option value="">Selecione uma categoria</option>
                                    <option value="Alimentação">Alimentação</option>
                                    <option value="Transporte">Transporte</option>
                                    <option value="Moradia">Moradia</option>
                                    <option value="Educação">Educação</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dataDespesa" class="form-label">Data da Despesa</label>
                                <input type="date" class="form-control" id="dataDespesa" name="dataDespesa" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="">Selecione um status</option>
                                    <option value="Paga">Paga</option>
                                    <option value="Não Paga">Não Paga</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Registrar Despesa</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalDespesa">Ver Despesas</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- Modal Despesa -->
        <?php include '../components/modalDespesa.php'; ?>
        <!-- Modal Despesa -->

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