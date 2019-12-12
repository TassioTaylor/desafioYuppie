@extends('layout')

@section('content')

    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Alunos</h1>
    </div><!-- /.col -->
    </br>
        <a class="btn btn-primary" href="alunos/form-create">Cadastrar</a>
    </br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data Nasc.</th>
                        <th>Ações</th>
                    </tr>
                    <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{$aluno -> id}}</td>
                            <td>{{$aluno -> nome}}</td>
                            <td>{{$aluno -> data_nascimento}}</td>

                            <td>
                                <a href="{{"/alunos/form-edit/{$aluno -> id}"}}">Editar</a>
                                <a href="{{"/alunos/delete/{$aluno -> id}"}}">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection