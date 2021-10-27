<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Pokedex') | Pokedex</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="/js/app.js"></script>
    </head>

    <body class="bg-minion">
        <header class="bg-success">
                <div class="text-center">
                    <img src="{{asset('img/logo/pokedex-logo.png')}}">
                </div>
        </header>


    <main role="main" class="inner cover">
        @yield('content')
    </main>

    <footer class="py-5 bg-success">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright © Pokedex 2021
            </p>
        </div>
    </footer>
    </body>
</html>
