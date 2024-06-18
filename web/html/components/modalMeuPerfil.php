<?php

?>

<div class="modal" id="popUpLogin">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- MODAL HEADER -->
            <div class="modal-header d-flex justify-content-center">
                <h3>Meu Perfil</h3>
            </div>
            <!-- MODAL HEADER -->

            <!-- MODAL BODY -->
            <div class="modal-body">
                <form action="processos/atualizarPerfil.php" method="post">
                    <div class="form-group my-3">
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome"
                            value="<?php echo htmlspecialchars($_SESSION['Nome']); ?>">
                    </div>

                    <div class="form-group my-3">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email"
                            value="<?php echo htmlspecialchars($_SESSION['Email']); ?>">
                    </div>
                    <div class="form-group my-3">
                        <label for="password">Senha</label>
                        <input class="form-control" type="password" name="senha" id="senha"
                            placeholder="Digite uma nova senha" value="">
                    </div>
                    <button class="btn btn-warning" type="reset">Limpar</button>
                    <button class="btn btn-success" type="submit">Alterar</button>
                </form>

                <form action="processos/definirLimiteGastos.php" method="post">
                    <div class="form-group my-3">
                        <label for="limite">Limite de Gastos</label>
                        <input class="form-control" type="text" name="limite" id="limite"
                            placeholder="Defina um limite de Gastos" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select class="form-select" id="categoria" name="categoria" required>
                            <option value="">Selecione uma categoria</option>
                            <option value="Alimentação">Alimentação</option>
                            <option value="Transporte">Transporte</option>
                            <option value="Moradia">Moradia</option>
                            <option value="Educação">Educação</option>
                            <option value="Saúde">Saúde</option>
                            <option value="Lazer">Lazer</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit">Alterar</button>
                </form>
                <form action="processos/definirValorMinimo.php" method="post">
                    <div class="form-group my-3">
                        <label for="name">Valor mínimo</label>
                        <input class="form-control" type="text" name="valorMinimo" id="valorMinimo"
                            placeholder="Defina um valor mínimo para transações" value="" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Alterar</button>
                    </div>
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
</div>