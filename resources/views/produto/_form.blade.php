{{ csrf_field() }}
<div class="card card-primary">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}">
    </div>

    <div class="form-group">
        <label for="preco">Preço</label>
        <input type="number" class="form-control" id="preco" name="preco" value="{{$produto->preco}}">
    </div>

    <div class="form-group">
        <label for="estoque">Estoque</label>
        <input type="number" class ="form-control" id="estoque" name="estoque" value="{{$produto->estoque}}">
    </div>

</div>
