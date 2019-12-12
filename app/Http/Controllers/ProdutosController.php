<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produto = Produto::all();
        return view('produto.produtos',compact('produto'));
    }
}
