<?php

namespace App\Imports;

use App\Produto;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdutosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produto([
            'nome' => $row[0],
            'preco' => $row[1],
            'estoque' => $row[2],
        ]);
    }
}
