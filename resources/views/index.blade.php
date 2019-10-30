@extends('layouts.app', ['current' => 'home'])

@section('body')

    <div class="mt-5">
        <div class="row">
            <div class="container">
                <div class="card-deck">
                    <div class="card border bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Produtos</h5>
                            <p class="card-text">Aqui você cadastra todos os seus produtos</p>
                            <a href="/produtos"><button class="btn btn-primary">Cadastre seus produtos</button></a>
                        </div>
                    </div>
                    <div class="card border bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Categorias</h5>
                            <p class="card-text">Aqui você cadastra todos os seus categorias</p>
                            <a href="/categorias"><button class="btn btn-warning">Cadastre suas categorias</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
