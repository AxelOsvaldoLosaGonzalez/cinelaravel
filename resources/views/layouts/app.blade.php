<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .uno
        {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="imagenes/home.png" alt="" width="50px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('') }}
                                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 140px;">
                                            <div class="d-flex align-items-center">
                                                <img src="imagenes/login.png" alt="" width="30px">
                                            </div>
                                            <div>
                                                INICIO DE SESIÓN
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('') }}
                                        <div style="display: flex; flex-direction: column; align-items: center; width: 100px;">
                                            <div class="d-flex align-items-center">
                                                <img src="imagenes/registro.png" alt="" width="30px">
                                            </div>
                                            <div>
                                                REGISTRO
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <li class="nav-item" style="margin-right: 15px" >
                                <a href="{{url('peliculas')}}" class="nav-link" >
                                <div class="uno">
                                    <div>
                                        <img src="imagenes/pelicula.png" alt="" width="30px">
                                    </div>
                                    <div>
                                        PELICULAS
                                    </div>
                                </div>
                            </a>
                            </li>
                            <li class="nav-item" style="margin-right: 15px">
                                <a href="{{url('cines')}}" class="nav-link">
                                    <div class="uno">
                                        <div>
                                            <img src="imagenes/cine.png" alt="" width="30px">
                                        </div>
                                        <div>
                                            CINES
                                        </div>
                                    </div>
                                    
                                </a>
                            </li>
                            <li class="nav-item" style="margin-right: 15px">
                                <a href="{{url('directores')}}" class="nav-link">
                                    <div class="uno">
                                        <div>
                                            <img src="imagenes/director.png" alt="" width="30px">
                                        </div>
                                        <div>
                                            DIRECTORES
                                        </div>
                                    </div>
                                    
                                </a>
                            </li>
                            <li class="nav-item" style="margin-right: 15px">
                                <a href="{{url('dias')}}" class="nav-link">
                                    <div class="uno">
                                        <div class="d-flex align-items-center">
                                            <img src="imagenes/cita.png" alt="" width="30px">
                                        </div>
                                        <div>
                                            DIAS
                                        </div>
                                    </div>
                                   
                                </a>
                            </li>
                            <li class="nav-item" style="margin-right: 15px">
                                <a href="{{ url('clasificaciones') }}" class="nav-link">
                                    <div class="uno">
                                        <div class="d-flex align-items-center">
                                            <img src="imagenes/clasificacion.png" alt="" class="mr-2" style="width: 30px;">
                                        </div>
                                        <div>
                                            CLASIFICACIONES
                                        </div>
                                    </div>
                                    
                                </a>
                            </li>
                            
                            <li class="nav-item" style="margin-right: 15px">
                                <a href="{{url('descuentos')}}" class="nav-link">
                                        <div class="uno">
                                        <div class="d-flex align-items-center">
                                            <img src="imagenes/descuentos.png" alt="" class="mr-2" style="width: 30px;">
                                        </div>
                                        <div>
                                            DESCUENTOS
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-right: 15px">
                                <a href="{{url('generos')}}" class="nav-link">
                                    <div class="uno">
                                        <div class="d-flex align-items-center">
                                            <img src="imagenes/generos.png" alt="" class="mr-2" style="width: 30px;">
                                        </div>
                                        <div>
                                            GENEROS
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-right: 15px">
                                <a href="{{url('protagonistas')}}" class="nav-link">
                                    <div class="uno">
                                        <div class="d-flex align-items-center">
                                            <img src="imagenes/personaje.png" alt="" class="mr-2" style="width: 30px;">
                                        </div>
                                        <div>
                                            PROTAGONISTAS
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-right: 15px">
                                <a href="{{url('ciudades')}}" class="nav-link">
                                    <div class="uno">
                                        <div class="d-flex align-items-center">
                                            <img src="imagenes/ciudades.png" alt="" class="mr-2" style="width: 30px;">
                                        </div>
                                        <div>
                                            CIUDADES
                                        </div>
                                    </div>
                                </a>
                            </li>

                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <div>
                                        <div class="uno">
                                            <img src="imagenes/login.png" alt="" width="30px">
                                        </div>
                                        <div>
                                         {{ Auth::user()->name }}   
                                        </div>
                                    </div>
                                    
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@stack("scripts")
</body>
</html>
