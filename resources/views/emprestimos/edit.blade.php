@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <form method="POST" action="/emprestimos/{{ $emprestimo->id }}">
                @csrf
                @method('patch')
                @include('emprestimos.form')
            </form>
        </div>
  @endsection