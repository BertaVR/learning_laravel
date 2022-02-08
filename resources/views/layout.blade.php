<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title', 'Tienda de items')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<header>
    <ul>
    <li><a href="/">Home</a></li>
    <li><a href="../items">Items</a></li>
    <li><a href="/items/create">Añadir Items</a></li>

</ul>
</header>
        <main>
            @yield('content')
        </main>
        <script src="" async defer></script>
    </body>
</html>
