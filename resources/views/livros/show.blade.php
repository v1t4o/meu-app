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
        </div>
    </div>
@endsection