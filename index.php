<!DOCTYPE html>
<html>

<head>
    <title>Sistema de empréstimo</title>
    <!--Meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#2b2b2b">
    <!--Fonts-->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href=""><img src="imgs/brand.png"></a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active"><span class="sr-only">(current)</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="content">
        <div class="container-fluid">
            <!--Bloco de login-->
            <form action="dashboard.php">
                <div class="row justify-content-center">
                    <div class="col-sm-5 block">
                        <div class="row titulo-bloco">
                            <h1>Efetuar login</h1>
                        </div>
                        <div class="middle--block">
                            <div class="form-group content-block">
                                <label for="login">Nome de usuário</label>
                                <input type="text" class="form-control" id="login">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <input type="submit" class="btn btn-success" value="Entrar">
                            <a href="">
                                <h3 class="esqueci-a-senha">Esqueci a minha senha</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer class="footer">
        <p>
            Make with <span class="love">❤</span>
        </p>
        <!--<aria-label> serve para auxiliar techs a ditar o texto do elemento que não tem texto-->
        <div class="switch-container">
            <input id="night-mode" class="switch switch-shadow" type="checkbox" aria-label="night-mode">
            <label for="night-mode"></label>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>