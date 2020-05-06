<?php
//Autor: Victor de Oliveira
//Criação do projeto: 09/03/2020
//Autor da última atualização: Victor
//Data última atualização: 11/03/2020
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*Linha de comando para utilizar a conexão já criada pelo framework de acesso ao BD*/
use App\Livro;

class LivroController extends Controller
{
    //Função para listagem de livros cadastrados
    public function index(){
        $livros = Livro::all();
        return view ('livros.index',compact('livros'));
    }

    //Função para redirecionamento para tela de cadastro.
    public function create(){
        return view ('livros.create')->with('livro', new Livro);
    }

    //Função para salvamento de cadastro de livro no banco de dados
    public function store(Request $cadlivro){
        $objlivro = new Livro;
        $objlivro->titulo = $cadlivro->titulo;
        $objlivro->autor = $cadlivro->autor;
        $objlivro->isbn = $cadlivro->isbn;
        $objlivro->procedencia = $cadlivro->procedencia;
        $objlivro->save();
        return redirect("/livros");
    }

    public function show(Livro $livro){
        return view('livros.show', compact('livro'));
    }

    public function edit(Livro $livro){
        return view('livros.edit', compact('livro'));
    }

    public function update(Livro $livro, Request $request){
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->procedencia = $request->procedencia;
        $livro->update();
        return redirect("/livros/$livro->id");
    }

    public function destroy(Livro $livro){
        $livro->delete();
        return redirect("/livros");
    }
}
