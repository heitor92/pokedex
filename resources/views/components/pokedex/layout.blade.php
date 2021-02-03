<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>{{ $title }}</title>
</head>

<body>
    <header>                
        <img src="assets/logo.svg" alt="">
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