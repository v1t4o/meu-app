@extends('layouts.master')
@section('content')
    <div id="corpo" class="row">
        <form id="interno" method="POST" action="/pessoas/{{ $pessoa->id }}">
            @csrf
            @method('patch')
            <h2 style="text-align:center">Cadastro de Pessoa</h2>
            @include('pessoas.form')
        </form>
    </div>
@endsection