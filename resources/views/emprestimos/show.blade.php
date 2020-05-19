@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm">
            <h3 style="text-align:center">Dados do Empréstimo</h3>
            <b>Título:</b> {{ $emprestimo->livro->titulo }} </br>
            <b>Usuário:</b> {{ $emprestimo->pessoa->nome }} </br>
            <b>Retirada:</b> {{ Carbon\Carbon::parse($emprestimo->inicio)->format('d/m/Y') }} </br>
            <b>Devolução:</b> {{ Carbon\Carbon::parse($emprestimo->fim)->format('d/m/Y') }} </br>
        </div>
    </div>
@endsection