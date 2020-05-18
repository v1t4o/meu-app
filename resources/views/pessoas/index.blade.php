@extends('layouts.master')
@section('content')
        <div class="row">
            <div class="col-sm">
                <h2 style="text-align:center">Pessoas Cadastradas</h2>
                <form method="GET" action="/pessoas">
                    <div class="row">
                        <div class=" col-sm input-group">
                        <input type="text" class="form-control" name="busca" value="{{ Request()->busca }}">

                        <div class="col-sm input-group-btn">
                            <button type="submit" class="btn btn-success"> Buscar </button>
                        </div>

                        </div>
                    </div>
                </form>
                {{ $pessoas->appends(request()->query())->links() }}
                <div class="row">
                    <table class="itens" text-align="center">
                        <tr class="linha">
                            <td class="cabecalho">Nome</td>
                            <td class="cabecalho">CPF</td>
                            <td class="cabecalho">E-mail</td>
                            <td class="cabecalho">Idade</td>
                            <td class="cabecalho">Ações</td>
                        </tr>
                        @foreach($pessoas as $pessoa)
                        <tr class="linha">
                            <td class="item"><a href="/pessoas/{{ $pessoa->id }}">{{ $pessoa->nome }}</a></td>
                            <td class="item">{{ $pessoa->cpf }}</td>
                            <td class="item">{{ $pessoa->email }}</td>
                            <td class="item">{{ $pessoa->idade }}</td>
                            <td class="item">
                                <a href="http://127.0.0.1:8000/pessoas/{{ $pessoa->id }}/edit"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="/pessoas/{{ $pessoa->id }}">
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