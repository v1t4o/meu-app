@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm">
        <h2 style="text-align:center">Dados da Pessoa</h2>
            <div class="col">
                <b>Nome:</b> {{ $pessoa->nome }} </br>
                <b>CPF:</b> {{ $pessoa->cpf }} </br>
                <b>E-mail:</b> {{ $pessoa->email }} </br>
                <b>Idade:</b> {{ $pessoa->idade }} </br>
            </div>
        </div>
    </div>
@endsection