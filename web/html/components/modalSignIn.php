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
                <form action="usuario/processos/cadastro.php" method="post">
                    <div class="form-group my-3">
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome">
                    </div>

                    <div class="form-group my-3">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group my-3">
                        <label for="password">Senha</label>
                        <input autocomplete="off" class="form-control" type="password" name="senha" id="senha"
                            placeholder="Digite sua senha">
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