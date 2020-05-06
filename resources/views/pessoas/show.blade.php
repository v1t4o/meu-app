@extends('layouts.master')
@section('content')
    <div id="corpo" class="row">
        <div class="col-sm">
        <h2 style="text-align:center">Dados da Pessoa</h2>
            <div class="col">
                <b>Nome:</b> {{ $pessoa->nome }} </br>
                <b>CPF:</b> {{ $pessoa->cpf }} </br>
                <b>E-mail:</b> {{ $pessoa->email }} </br>
                <b>Idade:</b> {{ $pessoa->idade }} </br>
            </div>
            <div class="row">
                <div class="text-left" id="btnmenu">
                    <a id="BtnSair" href="http://127.0.0.1:8000/">Menu</a>
                </div>
                <div class="text-center" id="btncad">
                    <a id="CadItem" href="http://127.0.0.1:8000/pessoas/create">Cadastrar Pessoa</a>
                </div>
            </div>
        </div>
    </div>
@endsection