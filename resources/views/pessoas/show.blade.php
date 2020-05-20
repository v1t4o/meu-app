@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Dados da Pessoa</div>
        <div class="card-body">
            <b>Nome:</b> {{ $pessoa->nome }} </br>
            <b>CPF:</b> {{ $pessoa->cpf }} </br>
            <b>E-mail:</b> {{ $pessoa->email }} </br>
            <b>Idade:</b> {{ $pessoa->idade }} </br>
        </div>
    </div>
@endsection