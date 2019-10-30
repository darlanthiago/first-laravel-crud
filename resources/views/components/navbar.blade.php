<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm rounded pt-3 pb-3">
        <a class="navbar-brand" href="/">
            <img src="{{asset('img/stock.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            ERP
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ ($current == 'home')? 'active' : '' }}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ ($current == 'produtos')? 'active' : '' }}">
                <a class="nav-link" href="/produtos">Produtos</a>
            </li>
            <li class="nav-item {{ ($current == 'categorias')? 'active' : '' }}">
                <a class="nav-link" href="/categorias">Categorias</a>
            </li>
        </ul>
    </div>
</nav>
