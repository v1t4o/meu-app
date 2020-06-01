@extends('layouts.master')
@section('content')
        <div class="card">
            <div class="card-header">Pessoas Cadastradas</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <form method="GET" action="/pessoas">
                            <div class="row">
                                <div class="col-sm form-group">
                                    <input type="text" class="form-control" name="busca" value="{{ Request()->busca }}">
                                </div>
                                <div class="col-2 form-group">
                                    <button type="submit" class="btn btn-success form-control"> Buscar </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{ $pessoas->appends(request()->query())->links() }}
                </div>
                </br>
                <div class="row">
                    <div class="col-sm">
                        <table class="table table-striped" text-align="center">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Idade</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pessoas as $pessoa)
                                <tr>
                                    <td><a href="/pessoas/{{ $pessoa->id }}">{{ $pessoa->nome }}</a></td>
                                    <td>{{ $pessoa->cpf }}</td>
                                    <td>{{ $pessoa->email }}</td>
                                    <td>{{ $pessoa->idade }}</td>
                                    <td>
                                        <form method="POST" action="/pessoas/{{ $pessoa->id }}">
                                            <a href="http://127.0.0.1:8000/pessoas/{{ $pessoa->id }}/edit"><i class="fas fa-edit"></i></a>
                                            {{ csrf_field() }} 
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-link"><i class="fas fa-trash-alt"></i></button>
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