<?php include_once 'shared/header.php'?>
 <section class="content">
        <div class="container-fluid">
            <form action="entradaNovoEmprestimo.php" method="">
                <div class="row justify-content-center">
                    <div class="col-sm-5 block">
                        <div class="row titulo-bloco">
                            <h1>Qual o <strong>prazo</strong> para pagamento?</h1>
                        </div>
                        <div class="middle--block">
                            <div class="form-group content-block">
                                <label for="prazoPagamento">Prazo</label>
                                <input id="prazoPagamento" type="money" class="form-control"
                                    data-mask="0000000000x" data-mask-reverse="true">
                            </div>
                            <input type="submit" class="btn btn-success" value="Continuar">
                            <a href="valorNovoEmprestimo.php" class="btn btn-secondary">Voltar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include_once 'shared/footer.php'?>