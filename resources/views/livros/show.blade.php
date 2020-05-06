@extends('layouts.master')
@section('content')
    <div id="corpo" class="row">
        <div class="col-sm">
        <h2 style="text-align:center">Dados do Livro</h2>
            <div class="col">
                <b>Título:</b> {{ $livro->titulo }} </br>
                <b>Autor:</b> {{ $livro->autor }} </br>
                <b>ISBN:</b> {{ $livro->isbn }} </br>
                <b>Procedência:</b> {{ $livro->procedencia }} </br>
            </div>
            <div class="row">
                <div class="text-left" id="btnmenu">
                    <a id="BtnSair" href="http://127.0.0.1:8000/">Menu</a>
                </div>
                <div class="text-center" id="btncad">
                    <a id="CadItem" href="http://127.0.0.1:8000/livros/create">Cadastrar Livro</a>
                </div>
            </div>
        </div>
    </div>
@endsection