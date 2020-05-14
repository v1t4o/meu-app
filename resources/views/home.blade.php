@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <div class="col-sm">
                <div class="row">
                    <a id="CadItem" href="http://127.0.0.1:8000/livros/create">Cadastrar Livro</a>
                </div>
                <div class="row">
                    <a id="CadItem" href="http://127.0.0.1:8000/livros">Listar Livro</a>
                </div>
                <div class="row">
                    <a id="CadItem" href="http://127.0.0.1:8000/pessoas/create">Cadastrar Pessoa</a>
                </div>
                <div class="row">
                    <a id="CadItem" href="http://127.0.0.1:8000/pessoas">Listar Pessoa</a>
                </div>
                <div class="row">
                    <a id="CadItem" href="http://127.0.0.1:8000/emprestimos/create">Cadastrar Empréstimo</a>
                </div>
                <div class="row">
                    <a id="CadItem" href="http://127.0.0.1:8000/emprestimos">Listar Empréstimos</a>
                </div>
            </div>
        </div>
        @endsection