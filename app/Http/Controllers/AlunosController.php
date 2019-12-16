<?php

namespace App\Http\Controllers;

use App\Alunos;
use App\Turma;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index(){
        $alunos = Alunos::all();
        $turmas = Turma::all();

        return view('alunos.alunos',compact('alunos','turmas'));
    }

    public function formCreate(){

        $turmas = Turma::pluck('nome','id');
        return view('alunos.create' , ['aluno' => new Alunos()], compact('turmas'));

    }

    public function create(Request $request){

        $this->_validate($request);
        Alunos::create($request->all());
        return redirect()->to('alunos');

    }

    public function delete(Request $request, $id){
        $aluno = Alunos::find($id);
        $aluno->delete();

        return redirect()->to('alunos');
    }

    public function formEdit( $id){
        $aluno = Alunos::find($id);
        $turmas = Turma::pluck('nome','id');

        return view('alunos.edit', compact('aluno','turmas'));
    }

    public function edit(Request $request, $id){

        $this->_validate($request);
        $aluno = Alunos::findOrfail($id);
        $data = $request->all();
        $aluno->fill($data);
        $aluno->save();

        return redirect()->to('alunos');

    }

    protected function _validate(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'data_nascimento' => 'required',
            'turma_id' => 'required'
        ]);
    }

}
