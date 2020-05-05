@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <form id="interno" method="POST" action="/livros">
                @csrf
                <h2 style="text-align:center">Cadastro de Livro</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o título do livro">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="autor">Autor</label>
                            <input type="text" name="autor" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o nome do autor">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="isbn">ISBN</label>
                            <input maxlength=13 name="isbn" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o ISBN do livro">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="procedencia">Procedência</label>
                            <select name="procedencia" class="form-control" id="exampleFormControlSelect1">
                            <option>Nacional</option>
                            <option>Internacional</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="text-left">
                            <a id="BtnSairCad" href="http://127.0.0.1:8000/">Menu</a>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="text-right">
                            <button id="cadastro" type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
  @endsection