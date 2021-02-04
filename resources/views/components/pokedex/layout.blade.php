<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="{{ URL::asset('/js/jquery-3.5.1.min.js') }}"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <header>
        <a href="/"><img id="logo" src="{{ URL::asset('/assets/logo.svg') }}" alt=""></a>
        <span id="versao-top">Ver. 1.0</span>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <p>Copyright © 2021 Pokédex | Criado por Heitor de Souza</p>
    </footer>
</body>

</html>