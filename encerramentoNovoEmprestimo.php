<?php include_once 'shared/header.php'?>
<section class="content">
        <div class="container-fluid">
            <form action="dashboard.php" method="">
                <div class="row justify-content-center">
                    <div class="col-sm-5 block">
                        <div class="row titulo-bloco">
                            <h1>Empréstimo cadastrado com sucesso!</h1>
                        </div>
                        <div class="middle--block">
                            <div class="row input-padding-resumo">
                                <h2>Resumo - - - - - - - - - - - - - - - - - - - - - - - - -</h2>
                            </div>
                            <div class="row input-padding-resumo">
                                <h3><strong>Cliente: </strong>João das Frutas</h3>
                            </div>
                            <div class="row input-padding-resumo">
                                <h3><strong>Valor do empréstimo: </strong>R$ 1.000,00</h3>
                            </div>
                            <div class="row input-padding-resumo">
                                <h3><strong>Prazo para pagamento: </strong>2x de R$ 500,00</h3>
                            </div>
                            <div class="row input-padding-resumo">
                                <h3><strong>Data da primeira parcela: </strong>01/05/2019</h3>
                            </div>
                        </div>
                        <input id="btn-encerramento" type="submit" class="btn btn-success" value="Dashboard">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include_once 'shared/footer.php'?>