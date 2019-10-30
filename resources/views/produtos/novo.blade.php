@extends('layouts.app', ['current' => 'produtos'])


@section('body')

    <div class="display-4 mt-4">Novo Produto</div>
    <div class="card mt-4">
        <div class="card-body">
            <form action="/produtos" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="produto">Nome do Produto</label>
                        <input type="text" class="form-control" name="nome_produto" id="produto" placeholder="Produto">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="valor_produto">Valor do Produto</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">R$ 0.00</span>
                            </div>
                        <input type="text" class="form-control" name="preco_produto" aria-label="Dollar amount (with dot and two decimal places)">
                        </div>
                    </div>
                  </div>

                <div class="form-group">
                    <label for="categorias">Categoria</label>
                    <select class="form-control" id="categorias" name="categoria_produto">
                        @foreach ($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        @endforeach
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/produtos"><button type="button" class="btn btn-danger btn-sm">Cancelar</button></a>
            </form>
        </div>
    </div>
@endsection
