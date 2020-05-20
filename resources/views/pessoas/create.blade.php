@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">Cadastro de Pessoas</div>
        <div class="card-body">
            <form method="POST" action="/pessoas">
                @csrf
                @include('pessoas.form')
            </form>
        </div>
    </div>
@endsection