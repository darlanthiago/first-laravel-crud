<!doctype html>
<html lang="pt-br">
    <head>
        <title>Cadastro de Produtos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
        @component('components.navbar', ['current' => $current])

        @endcomponent
        <div class="container">

            <main role="main">
                @hasSection ('body')
                    @yield('body')
                @endif
            </main>
        </div>

  </body>
</html>
