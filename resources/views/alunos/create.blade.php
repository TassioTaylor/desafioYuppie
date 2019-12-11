@extends('layout')

@section('content')
    <form method="POST" action="/alunos/create">

        {{ csrf_field() }}
        @include('alunos._form')
        <button type="submit" class="btn btn-default">Enviar</button>

    </form>


@endsection