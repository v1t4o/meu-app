<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.css" rel="stylesheet">
        
        <!-- Custom styles for this template -->
        <link href="sticky-footer-navbar.css" rel="stylesheet">
        <!-- -->

        <link href="/assets/app.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/87abf41b82.js" crossorigin="anonymous"></script>
        <title>Sistema FFLCH</title>
    </head>
    <body>
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md mb-4 navbar-light" style="background-color: #1e006d">
                <a class="navbar-brand" href="/">
                    <img src="https://www.fflch.usp.br/sites/fflch.usp.br/files/2019-11/06_fflch_simbolo.jpg" width="30" height="30" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" style="color:#ffffff" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:#ffffff" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Livro
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/livros/create">Cadastrar</a>
                            <a class="dropdown-item" href="/livros">Listar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:#ffffff" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pessoa
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/pessoas/create">Cadastrar</a>
                            <a class="dropdown-item" href="/pessoas">Listar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:#ffffff" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Empréstimo
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/emprestimos/create">Registrar</a>
                            <a class="dropdown-item" href="/emprestimos">Listar</a>
                            </div>
                        </li>
                    </ul>
                    <div class="pull-right">
                        <ul class="navbar-nav mr-auto">
                        @auth
                            <form id="logout-form" action="/logout" method="POST"> 
                                {{ csrf_field() }}
                                <li class="nav-link">
                                    <button class="btn btn-success" type="submit">Sair </button>
                                </li>
                            </form>
                        @else
                            <li class="nav-link">
                                <a href="/login" class="btn btn-dark">Entrar</a>
                            </li>
                            <li class="nav-link">
                                <a href="/register" class="btn btn-dark">Cadastrar</a>
                            </li>
                        @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main role="main" class="container">
            @section('content')
            @show
        </main>
        <footer class="footer">
            <div class="container">
                <span class="text-muted">Copyright FFLCH - Faculdade de Filosofia, Letras e Ciências Humanas</span>
            </div>
        </footer>
        
        <script src="/assets/app.js"></script>
    </body>
</html>