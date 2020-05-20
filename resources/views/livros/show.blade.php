@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Dados do Livro</div>
        <div class="card-body">
            <div class="col">
                <b>Título:</b> {{ $livro->titulo }} </br>
                <b>Autor:</b> {{ $livro->autor }} </br>
                <b>ISBN:</b> {{ $livro->isbn }} </br>
                <b>Procedência:</b> {{ $livro->procedencia }} </br>
            </div>
        </div>
    </div>
@endsection