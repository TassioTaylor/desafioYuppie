{{ csrf_field() }}
<div class="card card-primary">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome', $aluno->nome)}}">
    </div>

    <div class="form-group">
        <label for="Data Nasc.">Data Nasc.</label>
        <input type="date" class="form-control" id="dataNasc" name="data_nascimento" value="{{old('data_nascimento',$aluno->data_nascimento)}}">
    </div>


    <div class="form-group">
        <label for="turma_id">Turma</label>

        {{Form::select('turma_id',
        $turmas,
        $aluno->turma_id,
        ['class' =>'form-control'])}}


    </div>

<div class="form-group">
<label for="cep">CEP</label>
<input type="number" class ="form-control" id="cep" name="cep" value="{{old('cep', $aluno->cep)}}">
</div>

<div class="form-group">
<label for="endereco">Endereço</label>
<input type="text" class="form-control" id="endereco" name="endereco" value="{{old('endereco', $aluno->endereco)}}">
</div>

<div class="form-group">
<label for="bairro">Bairro</label>
<input type="text" class="form-control" id="bairro" name="bairro" value="{{old('bairro', $aluno->bairro)}}">
</div>

<div class="form-group">
<label for="cidade">Cidade</label>
<input type="text" class="form-control" id="cidade" name="cidade" value="{{old('cidade', $aluno->cidade)}}">
</div>

<div class="form-group">
<label for="uf">UF</label>
<input type="text" class="form-control" id="uf" name="uf" value="{{old('uf', $aluno->uf)}}">
</div>
</div>
