<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            border-color: #fff;
            border-radius: 10px;
            margin: 0 auto;
            margin-top:0.5%;
            margin-left: 0.5%;
            position: relative;
            width:99%;
            height:100%;
            
        }
        h1#titulo{
            color: #ffffff;
            text-align: left;
            position: relative;
            left: 6%;
            margin-top: 3%;
            font-size: 60px;
            font-family: Arial, Helvetica, sans-serif;
        }
        img#logo{
            float: left;
            width: 150px;
            height: 150px;
            margin-top: 2%;
            left: 3%;
            position: relative;
        }
  
        a#CadLivro:link, a#CadLivro:visited {
            background-color: #002d6e;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            left: 45%;
            margin-top: 2%;
            position: relative;
            font-family: Arial, Helvetica, sans-serif;
        }

        a#CadLivro:hover, a#CadLivro:active {
            background-color: blue;
            left: 45%;
            margin-top: 2%;
            position: relative;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <title>Menu Principal</title>
</head>
<body>
    <div id="cab">
        <img id="logo" src="https://www.fflch.usp.br/sites/fflch.usp.br/files/2019-11/06_fflch_simbolo.jpg">
        <h1 id="titulo">Faculdade de Filosofia, Letras e Ciências Humanas</h1>
    </div>
    <div id="corpo">
        <a id="CadLivro" href="http://127.0.0.1:8000/livro/criar">Cadastrar Livro</a>
    </div>
</body>
</html>