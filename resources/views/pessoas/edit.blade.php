@extends('layouts.master')
@section('content')
    <div class="row">
        <form method="POST" action="/pessoas/{{ $pessoa->id }}">
            @csrf
            @method('patch')
            <h3 style="text-align:center">Cadastro de Pessoa</h3>
            @include('pessoas.form')
        </form>
    </div>
@endsection