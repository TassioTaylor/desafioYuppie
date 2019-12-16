@extends('layout')

@section('content')

@include('errors')

    <form method="POST" action="{{ "/produtos/edit/{$produto->id}" }}">

        {{ csrf_field() }}
        @include('produto._form')
        <button type="submit" class="btn btn-default">Salvar</button>

    </form>


@endsection