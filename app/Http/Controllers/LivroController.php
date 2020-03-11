<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    /*public function listar($livro){
        return view('livro',compact('livro') );
    }
    */
    public function listar(Request $dados){
        $user = $dados->get("usuario");
        $pass = $dados->get("senha");
        if( $user == "admin" && $pass == "123456"){
            return view ('livro');
        }
        else{
            return view ('login');
        }
    }

    public function criar(){
        return view ('criar');
    }

    public function login(){
        return view ('login');
    }
}
