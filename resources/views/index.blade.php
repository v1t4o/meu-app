@extends('layouts.master')
@section('content')
            <form id="interno" action="/login" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <h2 style="text-align:center">Autenticação de usuário</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Usuário</label>
                            <input type="text" name="usuario" class="form-control" id="exampleFormControlInput1" placeholder="Usuário">
                        </div>
                    </div>
                </div>            
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Senha</label>
                            <input type="password" name="senha" class="form-control" id="exampleFormControlInput1" placeholder="Senha">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <a id="CadLogin" href="http://127.0.0.1:8000/login/cadastrar">Cadastre-se</a>
                    </div>
                    <div class="col-sm">
                        <div class="text-right">
                            <button id="cadlog" type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </form>
@endsection