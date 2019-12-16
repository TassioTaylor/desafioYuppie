<?php

namespace App\Http\Controllers;

use App\Alunos;
use App\Produto;
use App\Venda;
use App\Venda_itens;
use Illuminate\Http\Request;

class VendaController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
       $vendas_itens = Venda_itens::all();
       $aluno = $request->aluno_id;

       if(!empty($request->aluno_id)){
           /*    $valorTotal = Venda_itens::all()->sum('valorTotal'); */
           $aluno = Alunos::find($request->aluno_id);
           $aluno->save();
       }

       foreach ($vendas_itens as $venda_itens){

           $item = Produto::find($venda_itens->produto_id);
           $item->estoque -= $venda_itens->quantidade;
           $item->save();
       }


       Venda::create([
           'aluno_id' => $request-> $aluno,
           'data'=> date('dmY'),
           'finalizada' => true,

       ]);

       /**foreach ($vendas as $venda){
           $venda = array();
           $venda['data'] = date('dmY');
           $venda['finalizada'] = 1;
           $venda['aluno_id'] = $request-> aluno_id;
           $venda->save();
           $vendas[] = $venda;
       }*/

       return redirect('vendas')->with('message', 'Venda realizada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $venda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venda $venda)
    {
        //
    }
}
