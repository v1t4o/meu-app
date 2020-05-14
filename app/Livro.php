<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public function emprestimos()
    {
        return $this->hasMany('App\Emprestimo');
    }

    public function procedencias(){
        return [
            'Nacional',
            'Internacional',
        ];
    }

    public function livrosid(){
        return Livro::all();
    }

}
