@extends('layouts.master')
@section('content')
        <div id="corpo" class="row">
            <div class="col-sm">
            <h2 style="text-align:center">Pessoas Cadastradas</h2>
                <div class="row">
                    <table class="itens" text-align="center">
                        <tr class="linha">
                            <td class="cabecalho">Nome</td>
                            <td class="cabecalho">CPF</td>
                            <td class="cabecalho">E-mail</td>
                            <td class="cabecalho">Idade</td>
                        </tr>
                        @foreach($pessoas as $pessoa)
                        <tr class="linha">
                            <td class="item"><a href="/pessoas/{{ $pessoa->id }}">{{ $pessoa->nome }}</a></td>
                            <td class="item">{{ $pessoa->cpf }}</td>
                            <td class="item">{{ $pessoa->email }}</td>
                            <td class="item">{{ $pessoa->idade }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="row">
                    <div class="text-left" id="btnmenu">
                        <a id="BtnSair" href="http://127.0.0.1:8000/">Menu</a>
                    </div>
                    <div class="text-center" id="btncad">
                        <a id="CadItem" href="http://127.0.0.1:8000/pessoas/create">Cadastrar Pessoa</a>
                    </div>
                </div>
            </div>
        </div>
            @endsection