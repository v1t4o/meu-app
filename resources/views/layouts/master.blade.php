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
    <header role="header">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/">
                <img src="https://www.fflch.usp.br/sites/fflch.usp.br/files/2019-11/06_fflch_simbolo.jpg" width="30" height="30" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Livro
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/livros/create">Cadastrar</a>
                        <a class="dropdown-item" href="/livros">Listar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pessoa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/pessoas/create">Cadastrar</a>
                        <a class="dropdown-item" href="/pessoas">Listar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Empréstimo
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/emprestimos/create">Registrar</a>
                        <a class="dropdown-item" href="/emprestimos">Listar</a>
                        </div>
                    </li>
                    @auth
                        <form id="logout-form" class="form-inline mt-0 mt-md-2" action="/logout" method="POST"> 
                            {{ csrf_field() }}
                            <li class="nav-item">
                                <button class="btn btn-success" type="submit">Sair </button>
                            </li>
                        </form>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link active">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link active">Cadastrar</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>

    <main style="position:absolute; top: 100px;" role="main" class="container">
            @section('content')
            @show
    </main>

    <footer style="position:absolute; bottom: 0px;" role="footer" class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
    <script src="/assets/app.js"></script>
  </body>
</html>