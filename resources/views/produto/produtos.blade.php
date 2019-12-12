@extends('layout')

@section('content')

    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Produtos</h1>
    </div><!-- /.col -->
    </br>
    <a class="btn btn-primary" href="produtos/form-create">Cadastrar</a>
    </br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Estoque</th>
                            <th>Ações</th>
                        </tr>
                        <tbody>
                        @foreach($produto as $produto)
                            <tr>
                                <td>{{$produto -> id}}</td>
                                <td>{{$produto -> nome}}</td>
                                <td>{{$produto -> preco}}</td>
                                <td>{{$produto -> estoque}}</td>

                                <td>
                                    <a href="{{"/produtos/form-edit/{$produto -> id}"}}">Editar</a>
                                    <a href="{{"/produtos/delete/{$produto -> id}"}}">Excluir</a>
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