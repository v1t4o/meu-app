@extends('layouts.master')
@section('content')
        <div class="card">
            <div class="card-header">Livros Cadastrados</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <form method="GET" action="/livros">
                            <div class="row">
                                <div class=" col-sm input-group">
                                    <input type="text" class="form-control" name="busca" value="{{ Request()->busca }}">
                                </div>
                                <div class="col-2 input-group-btn">
                                    <button type="submit" class="btn btn-success"> Buscar </button>
                                </div>
                            </div>
                        </form>
                        {{ $livros->appends(request()->query())->links() }}
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-sm">
                        <table class="table table-striped" text-align="center">
                            <thead>    
                                <tr class="linha">
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Procedência</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($livros as $livro)
                                <tr>
                                    <td><a href="http://127.0.0.1:8000/livros/{{ $livro->id }}">{{ $livro->titulo }}</a></td>
                                    <td>{{ $livro->autor }}</td>
                                    <td>{{ $livro->isbn }}</td>
                                    <td>{{ $livro->procedencia }}</td>
                                    <td>
                                        <form method="POST" action="/livros/{{ $livro->id }}">
                                            <a href="http://127.0.0.1:8000/livros/{{ $livro->id }}/edit"><i class="fas fa-edit"></i></a>
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