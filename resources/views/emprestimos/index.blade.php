@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <div class="col-sm">
            <h2 style="text-align:center">Empréstimos ativos</h2>
                <div class="row">
                    <table class="itens" text-align="center">
                        <tr class="linha">
                            <td class="cabecalho">Titulo</td>
                            <td class="cabecalho">Usuário</td>
                            <td class="cabecalho">Data de Retirada</td>
                            <td class="cabecalho">Data de Devolução</td>
                            <td class="cabecalho">Ações</td>
                        </tr>
                        @foreach($emprestimos as $emprestimo)
                        <tr class="linha">
                            <td class="item"><a href="http://127.0.0.1:8000/emprestimos/{{ $emprestimo->id }}">{{ $emprestimo->titulo }}</a></td>
                            <td class="item">{{ $emprestimo->usuario }}</td>
                            <td class="item">{{ $emprestimo->inicio }}</td>
                            <td class="item">{{ $emprestimo->fim }}</td>
                            <td class="item">
                                <a href="http://127.0.0.1:8000/emprestimos/{{ $emprestimo->id }}/edit"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="/emprestimos/{{ $emprestimo->id }}">
                                    {{ csrf_field() }} 
                                    {{ method_field('delete') }}
                                    <button type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </table>
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