<?php include_once 'shared/header.php'?>
<section class="content">
        <div class="container-fluid">
            <form action="prazoNovoEmprestimo.php" method="">
                <div class="row justify-content-center">
                    <div class="col-sm-5 block">
                        <div class="row titulo-bloco">
                            <h1>Qual o valor <strong>total</strong> a emprestar?</h1>
                        </div>
                        <div class="middle--block">
                            <div class="form-group content-block">
                                <label for="valorEmprestimo">Valor</label>
                                <input type="money" class="form-control" id="valorEmprestimo"
                                    data-mask="000.000.000.000.000,00" data-mask-reverse="true">
                            </div>
                            <input type="submit" class="btn btn-success" value="Continuar">
                            <a href="novoEmprestimo.php" class="btn btn-secondary">Voltar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include_once 'shared/footer.php'?>