<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title> NetBil </title>
</head>

<header class="container">
    <div class="header-login">
        <img src="/img/icons/icon.png" alt="">
    </div>
</header>

<body>
    <main class="page-login">
        <div class="" style="padding-top:8rem;">
            @yield('content')
        </div>
    </main>        
</body>
</html>