<?php include_once 'shared/header.php'?>
    <section class="content">
        <div class="container-fluid">
            <form action="dashboard.php" method="">
                <div class="row justify-content-center">
                    <div class="col-sm-5 block">
                        <div class="row titulo-bloco">
                            <h1>Cadastre um novo cliente</h1>
                        </div>
                        <div class="middle--block">
                            <div class="form-group">
                                <label for="nomeNovoCliente">Nome</label>
                                <input id="nomeNovoCliente" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="emailNovoCliente">Email</label>
                                <input id="emailNovoCliente" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telefoneNovoCliente">Telefone</label>
                                <input id="telefoneNovoCliente" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ruaNovoCliente">Rua</label>
                                <input id="ruaNovoCliente" type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="nCasaNovoCliente">N° casa</label>
                                        <input type="number" size="8" class="form-control">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="bairroNovoCliente">Bairro</label>
                                        <input type="text" size="20" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cidadeNovoCliente">Cidade</label>
                                <input type="text" value="Irecê" size="30" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success" value="Cadastrar">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include_once 'shared/footer.php'?>