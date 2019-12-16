@extends('layout')

@section('content')

@include('errors')

    <form method="POST" action="{{ "/alunos/edit/{$aluno->id}" }}">

        {{ csrf_field() }}
        @include('alunos._form')
        <button type="submit" class="btn btn-default">Salvar</button>

    </form>


@endsection