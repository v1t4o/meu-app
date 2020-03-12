<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    ////Função para listagem de pessoas cadastradas
    public function listpessoa(){
        $pessoas = Pessoa::all();
        return view ('listpessoa',compact('pessoas'));
    }

    //Função para redirecionamento para tela de cadastro.
    public function cadpessoa(){
        return view ('cadpessoa');
    }

    //Função para salvamento de cadastro de livro no banco de dados
    public function salvapessoa(Request $cadpessoa){
        $objpessoa = new Pessoa;
        $objpessoa->nome = $cadpessoa->nome;
        $objpessoa->cpf = $cadpessoa->cpf;
        $objpessoa->email = $cadpessoa->email;
        $objpessoa->idade = $cadpessoa->idade;
        $objpessoa->save();
        return redirect("/pessoa/listar");
    }
}

