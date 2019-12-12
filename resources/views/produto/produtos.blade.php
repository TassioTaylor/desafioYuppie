@extends('layout')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="nome">Descrição</label>
                <input type="text" class="form-control" id="nome" placeholder="insira a descrição do produto">
            </div>
            <div class="form-group">
                <label for="estoque">Estoque</label>
                <input type="number" class="form-control" id="estoque" placeholder="Estoque">
            </div>
            <div class="form-group">

                <label for="preco">Preço</label>
                <input type="number" class="form-control" id="preco" placeholder="Preço">
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection