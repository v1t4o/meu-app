@extends('layouts.master')
@section('content')
    <div id="corpo" class="row">
        <div class="col-sm">
        <h2 style="text-align:center">Dados do Empréstimo</h2>
            <div class="col">
                <b>Título:</b> {{ $emprestimo->livro->titulo }} </br>
                <b>Usuário:</b> {{ $emprestimo->pessoa->nome }} </br>
                <b>Retirada:</b> {{ $emprestimo->inicio }} </br>
                <b>Devolução:</b> {{ $emprestimo->fim }} </br>
            </div>
            <div class="row">
                <div class="text-left" id="btnmenu">
                    <a id="BtnSair" href="http://127.0.0.1:8000/">Menu</a>
                </div>
                <div class="text-center" id="btncad">
                    <a id="CadItem" href="http://127.0.0.1:8000/emprestimos/create">Registrar Empréstimo</a>
                </div>
            </div>
        </div>
    </div>
@endsection