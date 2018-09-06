<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Home </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    
</head>

<header class="heade-home d-flex">
    
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex">
                <section class="header-home-logo">
                    <a href="/"> <img src=" {{ asset('img/icons/logoMkt.png')}} " alt="logoMktNetbil"> </a>
                </section>
                
                <div class="shape"></div>
                
                <div class="era d-flex">
                    <p> ERA 2018/2019 </p>
                </div>
            </div>
            
            <div class="col-6 d-flex" style="align-items:center;">
                
                <ul class="d-flex">
                    @can('create', App\Tarefa::class)
                        <a href="/painel">
                            <li class="link"> PAINEL </li>
                        </a>
                    @endcan
                    <a href="">
                        <li  class="link" style="padding-left: 2rem;"> BLOG NTB </li>
                    </a>
                </ul>
                
               
            </div>
        </div>
    </div>

</header>

<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
