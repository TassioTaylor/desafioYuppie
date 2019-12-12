<?php

namespace App\Http\Controllers;

use App\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index(){
        $alunos = Alunos::all();
        return view('alunos.alunos',compact('alunos'));
    }

    public function formCreate(){

        return view('alunos.create' , ['aluno' => new Alunos()]);

    }

    public function create(Request $request){

       $teste = Alunos::create($request->all());
        dd($teste);
        return redirect()->to('alunos');

    }

    public function delete(Request $request, $id){
        $aluno = Alunos::find($id);
        $aluno->delete();

        return redirect()->to('alunos');
    }

    public function formEdit( $id){
        $aluno = Alunos::find($id);
        return view('alunos.edit', compact('aluno'));
    }

    public function edit(Request $request, $id){

        $aluno = Alunos::findOrfail($id);
        $data = $request->all();
        $aluno->fill($data);
        $aluno->save();

        return redirect()->to('alunos');


    }

}
