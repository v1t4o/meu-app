<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    ////Função para listagem de pessoas cadastradas
    public function index(){
        $pessoas = Pessoa::all();
        return view ('pessoas.index',compact('pessoas'));
    }

    //Função para redirecionamento para tela de cadastro.
    public function create(){
        return view ('pessoas.create');
    }

    //Função para salvamento de cadastro de livro no banco de dados
    public function store(Request $cadpessoa){
        $objpessoa = new Pessoa;
        $objpessoa->nome = $cadpessoa->nome;
        $objpessoa->cpf = $cadpessoa->cpf;
        $objpessoa->email = $cadpessoa->email;
        $objpessoa->idade = $cadpessoa->idade;
        $objpessoa->save();
        return redirect("/pessoas");
    }

    public function show(Pessoa $pessoa){
        return view('pessoas.show', compact('pessoa'));
    }
}

