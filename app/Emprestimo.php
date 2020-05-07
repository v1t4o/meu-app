<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    public function livro()
    {
        return $this->belongsTo('App\Livro');
    }
    
    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }


}
