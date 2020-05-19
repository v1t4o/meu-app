@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="col">
                <form method="POST" action="/livros">
                    @csrf
                    @include('livros.form')
                </form>
            </div>
        </div>
  @endsection