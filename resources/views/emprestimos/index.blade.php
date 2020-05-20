@extends('layouts.master')
@section('content')
        <div class="card">
            <div class="card-header">Empréstimos ativos</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <form method="GET" action="/emprestimos">
                            <div class="row">
                                <div class=" col-sm input-group">
                                    <input type="text" class="form-control" name="busca" value="{{ Request()->busca }}">
                                </div>
                                <div class="col-2 input-group-btn">
                                    <button type="submit" class="btn btn-success"> Buscar </button>
                                </div>
                            </div>
                        </form>
                        {{ $emprestimos->appends(request()->query())->links() }}
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-sm">
                        <table class="table table-striped" text-align="center">
                            <thead>
                                <tr class="linha">
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Usuário</th>
                                    <th scope="col">Data de Retirada</th>
                                    <th scope="col">Data de Devolução</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($emprestimos as $emprestimo)
                                <tr>
                                    <td><a href="http://127.0.0.1:8000/emprestimos/{{ $emprestimo->id }}">{{ $emprestimo->livro->titulo }}</a></td>
                                    <td>{{ $emprestimo->pessoa->nome }}</td>
                                    <td>{{ Carbon\Carbon::parse($emprestimo->inicio)->format('d/m/Y') }}</td>
                                    <td>{{ Carbon\Carbon::parse($emprestimo->fim)->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="http://127.0.0.1:8000/emprestimos/{{ $emprestimo->id }}/edit"><i class="fas fa-edit"></i></a>
                                        <form method="POST" action="/emprestimos/{{ $emprestimo->id }}">
                                            {{ csrf_field() }} 
                                            {{ method_field('delete') }}
                                            <button type="submit"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection