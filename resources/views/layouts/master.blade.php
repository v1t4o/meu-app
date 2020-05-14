<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo asset('fflchico.ico')?>" />
    <!-- Bootstrap CSS -->
    <link href="/assets/app.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/87abf41b82.js" crossorigin="anonymous"></script>
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
        </div>
    </div>
    <script src="/assets/app.js"></script>
  </body>
</html>