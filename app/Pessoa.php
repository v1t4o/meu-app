<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function emprestimos()
    {
        return $this->hasMany('App\Emprestimo');
    }
}
