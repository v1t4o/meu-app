<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo asset('fflchico.ico')?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/meu-app.scss')?>" type="text/css">
    <title>Sistema FFLCH</title>
  </head>
  <body>
    <div class="container">
        <div id="cab" class="row">
            <div class="col-sm">
                <img id="logo" src="https://www.fflch.usp.br/sites/fflch.usp.br/files/2019-11/06_fflch_simbolo.jpg">
            </div>
            <div class="col-sm">
                <h1 id="titulo">Faculdade de Filosofia, Letras e Ciências Humanas</h1>
            </div>
                    @auth
                        <form id="logout-form" action="/logout" method="POST"> 
                            {{ csrf_field() }}
                            <button class="btn btn-success" type="submit">Sair </button>
                        </form>
                    @else
                        <a href="/login">Login</a>
                        <a href="/register">Register</a>
                    @endauth
        </div>
        <div class="row container">
            @section('content')
            @show
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
    </div>
  </body>
</html>