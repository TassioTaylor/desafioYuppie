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

    public function formCreate(){

        return view('produto.create' , ['produto' => new Produto()]);

    }

    public function create(Request $request){

        Produto::create($request->all());
        return redirect()->to('produto');

    }

    public function delete(Request $request, $id){
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->to('produto');
    }

    public function formEdit( $id){
        $produto = Produto::find($id);
        return view('produto.edit', compact('produto'));
    }

    public function edit(Request $request, $id){

        $produto = Produto::findOrfail($id);
        $data = $request->all();
        $produto->fill($data);
        $produto->save();

        return redirect()->to('produto');


    }
}
