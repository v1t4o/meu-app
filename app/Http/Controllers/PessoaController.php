<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    ////Função para listagem de pessoas cadastradas
    public function index(Request $request){
        if(isset($request->busca)){
            $pessoas = Pessoa::where('nome', 'LIKE', "%{$request->busca}%")->paginate(10);
        }
        else{
            $pessoas = Pessoa::paginate(10);
        }
        return view ('pessoas.index',compact('pessoas'));
    }

    //Função para redirecionamento para tela de cadastro.
    public function create(){
        return view ('pessoas.create')->with('pessoa', new Pessoa);
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

    public function edit(Pessoa $pessoa){
        return view('pessoas.edit', compact('pessoa'));
    }

    public function update(Pessoa $pessoa, Request $request){
        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->email = $request->email;
        $pessoa->idade = $request->idade;
        $pessoa->update();
        return redirect("/pessoas/$pessoa->id");
    }

    public function destroy(Pessoa $pessoa){
        $pessoa->delete();
        return redirect("/pessoas");
    }
}

