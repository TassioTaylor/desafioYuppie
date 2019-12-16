<!--
	Autor: Mateus Cardoso
	E-mail: matecardoso38@gmail.com
-->

@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">

                {!! Form::open(array('url' => '/vendas/store',  'class'=>'form-horizontal' )) !!}

                <div class="box-body">

                    <div class="form-group has-feedback {{ $errors->has('aluno_id') ? 'has-error' : '' }}">
                        <label for="aluno_id" class="col-sm-2 control-label">Aluno</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="aluno_id">
                                <option value="">--- Escolha o aluno ---</option>
                                @foreach($alunos as $key => $value)
                                    <option value="{{ $key }}">{{$value}}</option>
                                @endforeach
                            </select>

                        </div>

                    </div>

                    <div class="form-group has-feedback {{ $errors->has('produto_id') ? 'has-error' : '' }}">
                        <label for="produto_id" class="col-sm-2 control-label">Produto</label>
                        <div class="col-sm-10">
                             <select class="form-control" name="produto_id">
                                 <option value="">--- Escolha um produto ---</option>
                                 @foreach($produtos as $key => $value)
                                     <option value="{{ $key }}">{{$value}}</option>
                                 @endforeach
                             </select>

                         </div>

                    </div>

                    <div class="form-group has-feedback {{ $errors->has('quantidade') ? 'has-error' : '' }}">
                        <label for="quantidade" class="col-sm-2 control-label">Quantidade</label>
                        <div class="col-sm-10">
                            <input type="text" onkeypress='return event.keyCode > 47 && event.keyCode < 58'
                                   class="form-control" name="quantidade" placeholder="">
                        </div>
                    </div>

                </div>

                <div class="box-footer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn bg-blue btn-flat pull-right">Adicionar</button>
                </div>
                {!! Form::close() !!}

            </div>

            <div class="box">

                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($vendaItens as $itens)
                            <tr>
                                @foreach($produtos as $key => $value)

                                    @if($key == $itens->produto_id)
                                        <td>{{$value}}</td>
                                    @endif
                                @endforeach

                                <td>{{$itens->quantidade}}</td>
                                <td>{{$itens->valorTotal}}</td>
                                <td>
                                    {!! Form::open(['url' => '/vendas/delete/'.$itens->id, 'method' => 'GET', 'class'=>'form-horizontal', 'id'=>"form_buttons"]) !!}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-xs btn-flat btn-danger">Retirar</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td style="background-color: #E6E6E6;"></td>
                            <td style="text-align: right; background-color: #E6E6E6;">
                                <b>TOTAL:</b>
                            </td>
                            <td style="background-color: #E6E6E6;">
                                <b>valor total</b>
                            </td>
                            <td style="background-color: #E6E6E6;">
                                {!! Form::open(['url' => 'vendas', 'method' => 'GET', 'class'=>'form-horizontal']) !!}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-flat btn-danger">Limpar lista</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="box-footer">
                        {!! Form::open(['url' => 'vendas/salvar', 'class'=>'form-horizontal', 'id'=>"form_buttons2"]) !!}
                        <button type="submit" class="btn btn-flat btn-success pull-right">Encerrar</button>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

        </div>
    </div>
@stop


