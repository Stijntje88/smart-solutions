<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('components.navbar') <!-- Voegt de navbar toe -->

    <div class="container">
        @yield('content') <!-- Hier komt de content van elke pagina -->
    </div>

    @include('components.footer') <!-- Voegt de footer toe -->

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
