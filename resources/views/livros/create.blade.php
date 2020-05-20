@extends('layouts.master')

@section('content')
        <div class="card">
            <div class="card-header">Cadastro de Livro</div>
            <div class="card-body">
                <form method="POST" action="/livros">
                    @csrf
                    @include('livros.form')
                </form>
            </div>
        </div>
  @endsection