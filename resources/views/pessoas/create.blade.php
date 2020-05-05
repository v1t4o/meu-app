@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <form id="interno" method="POST" action="/pessoas">
                @csrf
                <h2 style="text-align:center">Cadastro de Pessoa</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o nome completo">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o seu e-mail">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="text" name="idade" class="form-control" id="exampleFormControlInput1" placeholder="Escreva sua idade">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input maxlength=11 name="cpf" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escreva o número do seu CPF">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="text-left">
                            <a id="BtnSairCad" href="http://127.0.0.1:8000/">Menu</a>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="text-right">
                            <button id="cadastro" type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endsection