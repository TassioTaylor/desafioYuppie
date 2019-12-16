<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda_itens extends Model
{
    protected $fillable = [
        'venda_id',
        'produto_id',
        'preco',
        'quantidade',
        'aluno_id'
    ];

    public function produtos()
    {
        $this->hasMany(Produto::class);
    }

    public function vendas()
    {
        $this->hasMany(Venda::class);
    }
}
