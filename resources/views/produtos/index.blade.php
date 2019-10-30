@extends('layouts.app', ['current' => 'produtos'])

@section('body')

<div class="display-4 mt-4">Todos produtos cadastrados</div>


@if (count($prods) > 0)

<a href="/produtos/novo">
    <button class="btn btn-warning mt-3">
            Novo Produto
    </button>
</a>


<table class="table table-hover border mt-4">
    <thead class="thead-dark border border-dark">
        <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome do Produto</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prods as $prod)

            <tr>
                <td>{{$prod->id}}</td>
                <td>{{$prod->nome_produto}}</td>
                <td>{{$prod->preco}}</td>
                <td>{{$prod->nome}}</td>
                <td>
                    <a href="/produtos/editar/{{$prod->id}}"><button class="btn btn-primary btn-sm mr-3">Editar</button></a>
                    <a href="/produtos/apagar/{{$prod->id}}"><button class="btn btn-danger btn-sm">Apagar</button></a>
                </td>
            </tr>


        @endforeach
    </tbody>
</table>
@else

<div class="text-center mt-5">
    <h2>Não há categorias cadastradas</h2>
    <a href="/categorias/novo">
        <button class="btn btn-warning mt-3">
                Cadastrar nova categoria
        </button>
    </a>
</div>

@endif




@endsection


