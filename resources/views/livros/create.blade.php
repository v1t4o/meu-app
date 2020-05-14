@extends('layouts.master')
@section('javascripts_head')
  <script src="{{asset('/js/livro.js')}}"></script>
@endsection('javascript_head')
@section('content')
        <div id="corpo" class="row">
            <form method="POST" action="/livros">
                @csrf
                @include('livros.form')
            </form>
        </div>
  @endsection