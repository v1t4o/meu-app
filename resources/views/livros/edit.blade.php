@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <form method="POST" action="/livros/{{ $livro->id }}">
                @csrf
                @method('patch')
                @include('livros.form')
            </form>
        </div>
  @endsection