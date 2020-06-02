<?php

namespace App\Http\Controllers;

use App\Emprestimo;
use App\Pessoa;
use App\Livro;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('admin');
        if(isset($request->busca)){
            $resultados = Livro::where('titulo', '=', "{$request->busca}")->first();
            if($resultados != null){
                $emprestimos = Emprestimo::where('livro_id', '=', "{$resultados->id}")->paginate(10);
            }
            else{
                $emprestimos = Emprestimo::paginate(10);
                return view ('emprestimos.index',compact('emprestimos'));
            }
        }
        else{
            $emprestimos = Emprestimo::paginate(10);
        }
        return view ('emprestimos.index',compact('emprestimos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        $pessoas = Pessoa::all();
        $livros = Livro::where('status', '=', "0")->get();
        $emprestimo = NULL;
        return view ('emprestimos.create', ['pessoas' => $pessoas, 'livros' => $livros, 'emprestimo' => $emprestimo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        $emprestimo = new Emprestimo;
        $emprestimo->pessoa_id = $request->pessoa_id;
        $emprestimo->livro_id = $request->livro_id;
        $emprestimo->inicio = Carbon::createFromFormat('d/m/Y', $request->inicio);
        $emprestimo->fim = Carbon::createFromFormat('d/m/Y', $request->fim);
        $emprestimo->observacao = $request->observacao;
        $emprestimo->status = "1";
        $emprestimo->livro->status = "1";
        $emprestimo->save();
        $emprestimo->livro->update();
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
        $this->authorize('admin');
        return view('emprestimos.show')->with('emprestimo', $emprestimo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprestimo $emprestimo)
    {
        $this->authorize('admin');
        return view('emprestimos.edit', compact('emprestimo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    /*public function renew(Request $request, Emprestimo $emprestimo)
    {
        $this->authorize('admin');
        
        $emprestimo->inicio = Carbon::createFromFormat('d/m/Y', $request->inicio);
        $emprestimo->fim = Carbon::createFromFormat('d/m/Y', $request->fim);
        $emprestimo->update();
        return redirect("/emprestimos/$emprestimo->id");
    }*/

    public function destroy(Emprestimo $emprestimo)
    {
        $this->authorize('admin');
        $emprestimo->status = "0";
        $emprestimo->livro->status = "0";
        $emprestimo->save();
        $emprestimo->livro->update();
        return redirect("/emprestimos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emprestimo  $emprestimo
     * @return \Illuminate\Http\Response
     */
    /*public function devolution(Emprestimo $emprestimo)
    {
        $this->authorize('admin');
        $emprestimo->delete();
        return redirect("/emprestimos");
    }*/
}
