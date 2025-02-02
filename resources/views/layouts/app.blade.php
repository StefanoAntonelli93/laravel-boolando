<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title','Boolando')</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('shared.header')
    <main>
        <!-- metodo yield richiamo 'products' da products.blade.php -->
        @yield('products')
        <!-- metodo yield richiamo 'about' da about.blade.php -->
        @yield('about')
        <!-- metodo yield richiamo 'home' da home.blade.php -->
        @yield('home')

    </main>
    @include('shared.footer')
</body>

</html>