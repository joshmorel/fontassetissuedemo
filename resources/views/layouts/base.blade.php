<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Asset Bundling Issue Demo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/app.css">

        <script src="https://use.fontawesome.com/{{ config('app.fa_embed_code') }}.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <div class="navbar-nav ml-auto">
                    @auth
                        <form method="post" action="/auth/logout">
                            @csrf
                            <button class="btn btn-outline-primary" type="submit">Logout</button>
                        </form>
                    @else
                        <form method="POST" action="/auth/login">
                            @csrf
                            <button class="btn btn-outline-primary" type="submit">Login as {{ config('app.demo_user_name') }}</button>
                        </form>
                    @endif
                </div>
            </div>
        </nav>
        <main class="container mt-3">
            @yield ('content')
        </main>
    </body>
</html>

