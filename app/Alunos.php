<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable = [
        'nome',
        'data_nascimento',
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'uf'
    ];
}
