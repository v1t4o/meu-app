<?php

namespace App\Http\Controllers;

use App\Emprestimo;
use App\Pessoa;
use App\Livro;
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emprestimos = Emprestimo::all();
        return view ('emprestimos.index',compact('emprestimos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoa = new Pessoa;
        $pessoa = Pessoa::all();
        $livro = new Livro;
        $livro = Livro::all();
        return view ('emprestimos.create')->with($pessoa, $livro);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emprestimo = new Emprestimo;
        $emprestimo->pessoa_id = $request->pessoa_id;
        $emprestimo->livro_id = $request->livro_id;
        $emprestimo->inicio = $request->inicio;
        $emprestimo->fim = $request->fim;
        $emprestimo->observacao = $request->observacao;
        $emprestimo->save();
        return redirect("/emprestimos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function show(Emprestimo $emprestimo)
    {
        return view('emprestimos.show', compact('emprestimo'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprestimo $emprestimo)
    {
        return view('emprestimos.edit', compact('emprestimo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprestimo $emprestimo)
    {
        $emprestimo->pessoa_id = $request->pessoa_id;
        $emprestimo->livro_id = $request->livro_id;
        $emprestimo->inicio = $request->inicio;
        $emprestimo->fim = $request->fim;
        $emprestimo->observacao = $request->observacao;
        $emprestimo->update();
        return redirect("/emprestimos/$emprestimo->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprestimo $emprestimo)
    {
        $emprestimo->delete();
        return redirect("/emprestimos");
    }
}
