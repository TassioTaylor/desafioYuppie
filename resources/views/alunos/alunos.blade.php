@extends('layout')

@section('content')

<h1>Alunos </h1>
</br>
<a class="btn btn-primary" href="alunos/form-create">Cadastrar</a>
</br>
<table class="table table-dark">
    <thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data_Nascimento</th>

    </tr>
    </thead>
    <tbody>
    @foreach($alunos as $aluno)
     <tr>
         <td>{{$aluno -> id}}</td>
         <td>{{$aluno -> nome}}</td>
         <td>{{$aluno -> data_nascimento}}</td>

         <td><a href="{{"/alunos/form-edit/{$aluno -> id}"}}">Editar</a>
             <a href="{{"/alunos/delete/{$aluno -> id}"}}">Excluir</a></td>
     </tr>
    @endforeach
    </tbody>
</table>
@endsection