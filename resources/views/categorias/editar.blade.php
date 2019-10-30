@extends('layouts.app', ['current' => 'categorias'])

@section('body')

    <div class="display-4 mt-4">Categoria ID: {{$cat->id}}</div>

    <form action="/categorias/{{$cat->id}}" method="post" class="mt-4">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="nome_categoria" name="nome_categoria" value="{{$cat->nome}}">
        </div>
        <input type="submit" value="Atualizar" class="btn btn-primary btn-sm">
    </form>

@endsection
