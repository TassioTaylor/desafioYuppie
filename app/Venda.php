<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'aluno_id',
        'data',
        'finalizada'
    ];


}
