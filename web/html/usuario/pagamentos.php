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
    <title>Pagamentos - SuasFinanças</title>
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
                        <li class="navbar-item"><a href="metasFinanceiras.php" class="nav-link text-white">Metas Financeiras</a>
                        </li>
                        <li class="navbar-item"><a href="pagamentos.php" class="nav-link text-warning">Pagamentos</a>
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

        <!-- MAIN PAGAMENTOS CONTENT -->
        <main>
            <div class="container my-5">
                <h1 class="bold text-center">Registrar Pagamento</h1>
                <hr>
                <div class="row mt-5">
                    <div class="col-md-6 mx-auto">
                        <form method="post" action="processos/cadastroPagamento.php">
                            <label for="despesaID" class="form-label">Selecione a Despesa</label>
                            <select class="form-select" id="despesaID" name="despesaID" required>
                                <option value="">Selecione uma despesa</option>
                                <?php foreach ($despesas as $despesa) : ?>
                                    <option value="<?php echo $despesa['DespesaID']; ?>">
                                        <?php echo $despesa['Descricao']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor Pago</label>
                                <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
                            </div>
                            <div class="mb-3">
                                <label for="dataPagamento" class="form-label">Data de Pagamento</label>
                                <input type="date" class="form-control" id="dataPagamento" name="dataPagamento" required>
                            </div>
                            <div class="mb-3">
                                <label for="metodoPagamento" class="form-label">Método de Pagamento</label>
                                <select class="form-select" id="metodoPagamento" name="metodoPagamento" required>
                                    <option value="">Selecione um método de pagamento</option>
                                    <option value="Cartão de Crédito">Cartão de Crédito</option>
                                    <option value="Cartão de Débito">Cartão de Débito</option>
                                    <option value="Dinheiro">Dinheiro</option>
                                    <option value="Transferência Bancária">Transferência Bancária</option>
                                    <option value="Boleto Bancário">Boleto Bancário</option>
                                    <!-- Adicione mais opções conforme necessário -->
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Registrar Pagamento</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN PAGAMENTOS CONTENT -->
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