@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <div class="col-sm">
            <h2 style="text-align:center">Livros Cadastrados</h2>
                <div class="row">
                    <table class="itens" align="center">
                        <tr class="linha">
                            <td class="cabecalho">Titulo</td>
                            <td class="cabecalho">Autor</td>
                            <td class="cabecalho">ISBN</td>
                            <td class="cabecalho">Procedência</td>
                        </tr>
                        @foreach($livros as $livro)
                        <tr class="linha">
                            <td class="item">{{ $livro->titulo }}</td>
                            <td class="item">{{ $livro->autor }}</td>
                            <td class="item">{{ $livro->isbn }}</td>
                            <td class="item">{{ $livro->procedencia }}</td>
                        </tr>
                        @endforeach
                    </table>
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