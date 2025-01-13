<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Estudos Laravel</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        header default
    </header>
    @yield('content') <!-- yield é uma diretiva do blade que permite a inclusão de conteúdo dinâmico -->
    <footer>
        footer default
    </footer>
</body>

</html>