@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Cadastro de Pessoa</div>
        <div class="card-body">
            <form method="POST" action="/pessoas/{{ $pessoa->id }}">
                @csrf
                @method('patch')
                @include('pessoas.form')
            </form>
        </div>
    </div>
@endsection