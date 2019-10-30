@extends('layouts.app', ['current' => 'produtos'])

@section('body')

    <div class="display-4 mt-4">Produto ID: {{$prod->id}}</div>

    <form action="/produtos/{{$prod->id}}" method="post" class="mt-4">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="produto">Nome do Produto</label>
            <input type="text" class="form-control" name="nome_produto" id="produto" value="{{$prod->nome_produto}}">
            </div>
            <div class="form-group col-md-6">
                <label for="valor_produto">Valor do Produto</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                <input type="text" class="form-control" name="preco_produto" aria-label="Dollar amount (with dot and two decimal places)" value="{{$prod->preco}}">
                </div>
            </div>
        </div>
        <input type="submit" value="Atualizar" class="btn btn-primary btn-sm">
    </form>

@endsection
