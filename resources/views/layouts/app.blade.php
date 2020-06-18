<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistema inscripciones</title>
    <link rel="stylesheet" href={{ asset('css/reset.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}> 
</head>
<body>

<div id="header">
        <div class="header-widget-full">
            <div class="header-widget-inner">
                <div class="col4-1">
                    <a href="http://www.unam.mx"><img src={{ asset('img/logo_unam_blanco.png') }} width="298" height="100"></a>
                </div>
                <div class="col4-1">&nbsp;</div>
                <div class="col4-1">&nbsp;</div>
                <div class="col4-1">
                    <a href="http://www.filos.unam.mx/"><img src={{ asset('img/logo_blanco_colores_ffyl.png') }} width="298" height="100"></a>
                </div>
                <div style="clear:both;"></div>
            </div>
            <nav>
                <ul id="main-nav">
                    <li><a href="http://www.filos.unam.mx/nuestra-facultad/">nuestra facultad</li>
                    <li><a href="http://www.filos.unam.mx/programas_academicos/">programas academicos</a></li>
                    <li><a href="http://www.filos.unam.mx/investigacion/">investigacion</a></li>
                    <li><a href="http://www.filos.unam.mx/publicaciones/">publicaciones</a></li>
                    <li><a href="http://www.filos.unam.mx/comunidad-ffyl/">comunidad ffyl</a></li>
                    <li><a href="http://www.filos.unam.mx/extension/">extension</a></li>
                    <li><a href="http://www.filos.unam.mx/equidad-de-genero/">equidad de genero</a></li>
                    <li><a href="http://sistemaintegral.filos.unam.mx/">sistema integral</a></li>
                    <li><a href="http://www.transparencia.unam.mx/">transparencia</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div>
        <div id="layout">
    <!-- Basura por default 
    <ul>
    
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
            </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a>{{ Auth::user()->name }} <span class="caret"></span></a>
                <div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Terminar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
    -->
    <div>
        @yield('content')
    </div>

    </div>
    </div>

</body>
</html>
