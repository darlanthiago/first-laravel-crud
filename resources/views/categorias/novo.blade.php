@extends('layouts.app', ['current' => 'categorias'])

@section('body')

    <div class="display-4 mt-4">Nova Categoria</div>
    <div class="card mt-4">
        <div class="card-body">
            <form action="/categorias" method="post">
                @csrf
                <div class="form-group">
                    <label for="categoria">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nome_categoria" id="categoria" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/categorias"><button type="button" class="btn btn-danger btn-sm">Cancelar</button></a>
            </form>
        </div>
    </div>
@endsection
