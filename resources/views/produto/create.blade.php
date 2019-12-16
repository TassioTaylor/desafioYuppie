@extends('layout')

@section('content')

@include('errors')

    <form method="POST" action="/produtos/create">

        {{ csrf_field() }}
        @include('produto._form')
        <button type="submit" class="btn btn-default">Enviar</button>

    </form>


@endsection