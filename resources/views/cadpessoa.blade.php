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
    <title>Cadastro de Pessoa</title>
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
        </div>
        <div id="corpo" class="row">
            <form id="interno" method="POST" action="/pessoa/salvar">
                @csrf
                <h2 style="text-align:center">Cadastro de Pessoa</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o nome completo">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o seu e-mail">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="text" name="idade" class="form-control" id="exampleFormControlInput1" placeholder="Escreva sua idade">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input maxlength=11 name="cpf" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o número do seu CPF">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="text-left">
                            <a id="BtnSairCad" href="http://127.0.0.1:8000/dashboard">Menu</a>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="text-right">
                            <button id="cadastro" type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
    </div>
  </body>
</html>