<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson-laravel - @yield('title')</title>
</head>
<body>
    <header>
        <h1>@yield('title')</h1>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>©️ 2021 jonki324</footer>
</body>
</html>
