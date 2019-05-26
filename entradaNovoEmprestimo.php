<?php include_once 'shared/header.php'?>
<section class="content">
        <div class="container-fluid">
            <form action="encerramentoNovoEmprestimo.php" method="">
                <div class="row justify-content-center">
                    <div class="col-sm-5 block">
                        <div class="row titulo-bloco">
                            <h1>Qual a <strong>data</strong> da primeira parcela?</h1>
                        </div>
                        <div class="middle--block">
                            <div class="form-group content-block">
                                <label for="dataEntradaEmprestimo">Entrada</label>
                                <input id="dataEntradaEmprestimo" type="date" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success" value="Emprestar">
                            <a href="prazoNovoEmprestimo.php" class="btn btn-secondary">Voltar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include_once 'shared/footer.php'?>