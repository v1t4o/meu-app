@extends('layouts.master')
@section('javascripts_head')
  <script src="{{asset('/js/pessoa.js')}}"></script>
@endsection('javascript_head')
@section('content')
    <div id="corpo" class="row">
        <form id="interno" method="POST" action="/pessoas">
            @csrf
            <h2 style="text-align:center">Registro de Empréstimos</h2>
            @include('pessoas.form')
        </form>
    </div>
@endsection