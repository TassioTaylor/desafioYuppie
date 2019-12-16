@extends('layout')

@section('content')

@include('errors')

    <form method="POST" action="/alunos/create">

        {{ csrf_field() }}
        @include('alunos._form')

        <button type="submit" class="btn btn-default">Enviar</button>

    </form>


@endsection