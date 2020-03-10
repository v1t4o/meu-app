<!doctype html>
<html lang="en">
  <head>
    <style>
        body{
            height: 100%;
        }
        div#cab{
            max-width: 100%;
            border-width: 5px;
            border-style: solid;
            border-color: #002d6e;
            border-radius: 10px;
            margin: 0 auto;
            top: 1%;
            margin-top:10px; 
            position: static;
            width:99%;
            height:200px;
            background: #002d6e;
            
        }
        div#corpo{
            max-width: 100%;
            border-width: 4px;
            border-style: solid;
            border-color: #002d6e;
            border-radius: 10px;
            margin-top:0.5%;
            margin-left: 0.5%; 
            position: relative;
            width:99%;
            height:100%;
            
        }
        form#interno{
            left:5%;
            margin-top: 1%;
            position:relative;
            width:90%; /* Valor da Largura */
            height:100%; /* Valor da Altura */
            font-family: Arial, Helvetica, sans-serif;
        }
        h1#titulo{
            color: #ffffff;
            text-align: left;
            position: relative;
            left: 6%;
            margin-top: 3%;
            font-size: 60px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        img#logo{
            float: left;
            width: 150px;
            height: 150px;
            margin-top: 2%;
            left: 3%;
            position: relative;
        }
        button#cadastro{
            background-color: #002d6e;
            position: relative;
            left: 93.2%;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cadastro de Livros</title>
  </head>
  <body>
    <div id="cab">
        <img id="logo" src="https://www.fflch.usp.br/sites/fflch.usp.br/files/2019-11/06_fflch_simbolo.jpg">
        <h1 id="titulo">Faculdade de Filosofia, Letras e Ciências Humanas</h1>
    </div>
    <div id="corpo">
        <form id="interno">
            <div class="form-group">
                <h2 style="text-align:center">Cadastro de Livro</h2>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Título</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o título do livro">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Autor</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o nome do autor">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">ISBN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o ISBN do livro">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Procedência</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Nacional</option>
                <option>Internacional</option>
                </select>
            </div>
            <div class="form-group">
                <button id="cadastro" type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>