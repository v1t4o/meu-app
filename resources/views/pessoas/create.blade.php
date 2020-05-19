@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm">
            <form method="POST" action="/pessoas">
                @csrf
                <h3 style="text-align:center">Cadastro de Pessoas</h3>
                @include('pessoas.form')
            </form>
        </div>
    </div>
@endsection