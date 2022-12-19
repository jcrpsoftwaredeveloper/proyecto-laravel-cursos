<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cursosOnline-@yield('title')</title> <!--{{env('APP_NAME')}} -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-orange-50">

<header>
    <nav style="background-color: #333; color: white; padding: 15px" >
        <div class="flex justify-between">
            <div style="width: 100%; display: flex; justify-content: left; align-items: center">
                <a style="margin-left: 15px" href="{{route('home')}}"><i class='bx bxs-book-add' style='color:#f7bd0c; font-size: 20px'  ></i> &nbsp; <span style="text-shadow: 2px 2px #ffac1d; "> CURSOS-BA </span></a>
                <a style="margin-left: 15px" href="{{route('home')}}"><i class='bx bxs-home' style='color:#f7bd0c' ></i> Inicio</a>
                <a style="margin-left: 15px" href="."><i class='bx bxs-dashboard' style='color:#f7bd0c' ></i> Panel de Control</a>
                <a style="margin-left: 15px" href="{{route('admin.categorias.index')}}"><i class='bx bx-grid-alt' style='color:#f7bd0c' ></i> Categorias</a>
                <a style="margin-left: 15px" href="{{route('admin.cursos.index')}}"><i class='bx bxs-book' style='color:#f7bd0c' ></i> Cursos</a>
                <a style="margin-left: 15px" href="{{route('admin.alumnos.index')}}"><i class='bx bx-body' style='color:#f7bd0c' ></i> Alumnos</a>
                <a style="margin-left: 15px" href="{{route('admin.profesores.index')}}"><i class='bx bx-male' style='color:#f7bd0c' ></i> Profesores</a>
                <a style="margin-left: 15px" href="{{route('admin.perfiles.index')}}"><i class='bx bxs-user-circle' style='color:#f7bd0c' ></i> Perfiles</a>
                <a style="margin-left: 15px" href="{{route('admin.usuarios.index')}}"><i class='bx bxs-user' style='color:#f7bd0c' ></i> Usuarios</a>
            </div>
            <div style="display: flex; justify-content: center; align-items: center">
                @if (Route::has('login'))  {{--Verifica si existe la ruta--}}
                @auth
                    <span style="display: flex; justify-content: center; align-items: center" class="mr-2"><i class='bx bxs-user-check' style='color:#f7bd0c' ></i> &nbsp;{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button style="display: flex; justify-content: center; align-items: center" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class='bx bx-power-off' style='color:#f7bd0c' ></i> &nbsp;Salir  {{--{{ __('Log Out') }}--}}
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-white underline">Iniciar sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Regístrese</a>
                    @endif
                @endauth
                @endif
            </div>
        </div>
    </nav>

    {{-- Mensajes flash--}}
    <x-alert-success>{{session('alertSuccess')??null}}</x-alert-success>
    <x-alert-error>{{session('alertError')??null}}</x-alert-error>
    <x-alert-warning>{{session('alertWarning')??null}}</x-alert-warning>
    <x-alert-info>{{session('alertInfo')??null}}</x-alert-info>

</header>

<div class="container mx-auto my-4">
    <div class="bg-white rounded-lg py-1 px-3 shadow-lg mb-4">
        <div class="flex justify-between">
            <h1 class="text-red-600">@yield('iconOption') @yield('titleOption')</h1>

            @if (!empty(app()->view->getSections()['urlAdd']))
                <a href="@yield('urlAdd')" class="bg-cyan-500 text-white rounded p-1">+</a>
            @endif
        </div>
        <h3 class="text-red-600">@yield('subtitleOption')</h3>
    </div>

    <div class="bg-white py-4 px-3">
        @yield('main')
    </div>
</div>

<footer style="width: 100%; height: 70px; background-color: #333; position: absolute; bottom: 0">
    <div id="footer" style="width: 100%; height: 100%; text-align: center; font-style: italic; color: white; display: flex; justify-content: center; align-items: center">
        <p> <i class='bx bxs-book-add' style='color:#f7bd0c; font-size: 20px'  ></i> | José Carlos Rodríguez Prieto | Desarrollo de Aplicaciones Web | <span style="color:#f7bd0c "> &copy; 2022</span></p>
    </div>
</footer>

</body>
</html>


