@extends('layouts.master')
@section('content')
        <div class="row">
            <div class="col-sm">
                <form method="POST" action="/livros/{{ $livro->id }}">
                    @csrf
                    @method('patch')
                    @include('livros.form')
                </form>
            </div>
        </div>
  @endsection