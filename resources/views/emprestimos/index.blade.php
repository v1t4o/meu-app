@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <div class="col-sm">
                <h2 style="text-align:center">Empréstimos ativos</h2>
                <form method="GET" action="/emprestimos">
                    <div class="row">
                        <div class=" col-sm input-group">
                        <input type="text" class="form-control" name="busca" value="{{ Request()->busca }}">

                        <div class="col-sm input-group-btn">
                            <button type="submit" class="btn btn-success"> Buscar </button>
                        </div>

                        </div>
                    </div>
                </form>
                {{ $emprestimos->appends(request()->query())->links() }}
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
                            <td class="item"><a href="http://127.0.0.1:8000/emprestimos/{{ $emprestimo->id }}">{{ $emprestimo->livro->titulo }}</a></td>
                            <td class="item">{{ $emprestimo->pessoa->nome }}</td>
                            <td class="item">{{ Carbon\Carbon::parse($emprestimo->inicio)->format('d/m/Y') }}</td>
                            <td class="item">{{ Carbon\Carbon::parse($emprestimo->fim)->format('d/m/Y') }}</td>
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
            </div>
        </div>
    @endsection