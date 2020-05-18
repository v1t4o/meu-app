@extends('layouts.master')

@section('content')
        <div id="corpo" class="row">
            <form method="POST" action="/livros">
                @csrf
                @include('livros.form')
            </form>
        </div>
  @endsection