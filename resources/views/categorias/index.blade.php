@extends('layouts.app', ['current' => 'categorias'])

@section('body')

    <div class="display-4 mt-4">Todas categorias cadastradas</div>

    @if (count($cats) > 0)

        <a href="/categorias/novo">
            <button class="btn btn-warning mt-3">
                    Nova categoria
            </button>
        </a>


        <table class="table table-hover border mt-4">
            <thead class="thead-dark border border-dark">
                <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome da Categoria</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cats as $cat)

                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nome}}</td>
                        <td>
                            <a href="/categorias/editar/{{$cat->id}}"><button class="btn btn-primary btn-sm mr-3">Editar</button></a>
                            <a href="/categorias/apagar/{{$cat->id}}"><button class="btn btn-danger btn-sm">Apagar</button></a>
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
