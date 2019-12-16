<?php

namespace App\Http\Controllers;

use App\Alunos;
use App\Produto;
use App\Venda;
use App\Venda_itens;
use Illuminate\Http\Request;

class VendaItensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $vendas_itens = Venda_itens::all();

       $alunos = Alunos::pluck('nome', 'id');

        /*$vendas_itens = Venda_itens::orderBy('produto_id','asc')->pluck('quantidade','produto_id');*/
       $produtos = Produto::orderBy('nome','asc')->pluck('nome', 'id');

       return view('venda.venda_itens',[
           'vendaItens' => $vendas_itens,
           'produtos'   => $produtos,
           'alunos' => $alunos
       ]);
   }


    public function create()
    {

    }


    public function store(Request $request)
    {
       $this->validate($request, [
            'quantidade' => 'required',
            'produto_id' => 'required',
       ]);

       $venda_itens = new Venda_itens;
       $venda_itens-> valorTotal = $request-> quantidade * Produto::find($request-> produto_id)->preco;
       $venda_itens-> quantidade = $request-> quantidade;
       $venda_itens-> produto_id = $request-> produto_id;
       $venda_itens-> aluno_id = $request-> aluno_id;
       $venda_itens->save();
       return redirect('vendas')->with('message', 'Produto atualizado!');
    }


    public function salvarVenda(Request $request)
    {
        {
            $vendas_itens = Venda_itens::all();
            if (!empty($request->aluno_id)) {
                /*    $valorTotal = Venda_itens::all()->sum('valorTotal'); */
                $aluno = Alunos::find($request->aluno_id);
                $aluno->save();
            }

            foreach ($vendas_itens as $venda_itens) {

                $item = Produto::find($venda_itens->produto_id);
                $item->estoque -= $venda_itens->quantidade;
                $item->save();
            }


            Venda::create([
                'aluno_id' => $venda_itens-> aluno_id,
                'data' => date('dmY'),
                'finalizada' => true,

            ]);


            return redirect('vendas')->with('message', 'Venda realizada!');
        }
    }



    public function edit(Venda_itens $venda_itens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venda_itens  $venda_itens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda_itens $venda_itens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venda_itens  $venda_itens
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vendaItens = Venda_itens::find($id);
        $vendaItens -> delete();
        return redirect('vendas');
    }

    protected function salvarAluno(Request $request){
        $alunoId =  $request -> aluno_id;
        return $alunoId;
    }
}
