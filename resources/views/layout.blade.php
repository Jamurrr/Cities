<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт с городами России</title>
</head>
<body>
<header>
    @if(session('selected_city'))
        <p>Город: {{ session('selected_city') }}</p>
    @endif
</header>
<main>
    @yield('content')
</main>
</body>
</html>
