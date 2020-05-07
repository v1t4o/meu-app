@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <form method="POST" action="/emprestimos">
                @csrf
                @include('emprestimos.form')
            </form>
        </div>
  @endsection