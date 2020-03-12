<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo asset('fflchico.ico')?>" />
    <link rel="stylesheet" href="<?php echo asset('css/meu-app.scss')?>" type="text/css">
    <title>Menu Principal</title>
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
            <div class="col-sm">
            <h2 style="text-align:center">Livros Cadastrados</h2>
                <div class="row">
                    <table class="itens" align="center">
                        <tr class="linha">
                            <td class="cabecalho">Titulo</td>
                            <td class="cabecalho">Autor</td>
                            <td class="cabecalho">ISBN</td>
                            <td class="cabecalho">Procedência</td>
                        </tr>
                        @foreach($livros as $livro)
                        <tr class="linha">
                            <td class="item">{{ $livro->titulo }}</td>
                            <td class="item">{{ $livro->autor }}</td>
                            <td class="item">{{ $livro->isbn }}</td>
                            <td class="item">{{ $livro->procedencia }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="row">
                    <div class="text-left" id="btnmenu">
                        <a id="BtnSair" href="http://127.0.0.1:8000/dashboard">Menu</a>
                    </div>
                    <div class="text-center" id="btncad">
                        <a id="CadItem" href="http://127.0.0.1:8000/livro/cadastrar">Cadastrar Livro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>