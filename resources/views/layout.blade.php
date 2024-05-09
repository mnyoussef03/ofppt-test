<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-md navben-daik by-dark">
    <ul class="navbar-nav">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="/marque" class="nav-link">Marque</a></li>
        <li class="nav-item"><a href="/voiture" class="nav-link">Voiture</a></li>
        <li class="nav-item"><a href="" class="nav-link">Gerer</a></li>
    </ul>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
