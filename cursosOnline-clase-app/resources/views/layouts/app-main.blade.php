<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cursosOnline-@yield('title')</title> <!--{{env('APP_NAME')}} -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')

</head>
<body class="bg-blue-50">
    <header>
        <nav style="background-color: #333; color: white; padding: 15px">
            <div class="flex justify-between">
                <div style="width: 100%; display: flex; justify-content: left; align-items: center">
                    <a style="margin-left: 15px" href="{{route('home')}}" class="px-1 "><i class='bx bxs-book-add' style='color:#f7bd0c; font-size: 20px'  ></i> &nbsp; <span style="text-shadow: 2px 2px #ffac1d; "> CURSOS-BA </span></a>
                    <a style="margin-left: 15px" href="{{route('home')}}" class="px-1 "><i class='bx bxs-home' style='color:#f7bd0c' ></i> Inicio</a>
                    <a style="margin-left: 15px" href="{{route('novedades')}}" class="px-1 {{ Route::is('novedades') ? 'bg-blue-600 rounded' : '' }}"><i class='bx bxs-dashboard' style='color:#f7bd0c' ></i> Novedades</a>
                    <a style="margin-left: 15px" href="{{route('cursos.index')}}" class="px-1 {{ Route::is('cursos.index') ? 'bg-blue-600 rounded' : '' }}"><i class='bx bxs-book' style='color:#f7bd0c' ></i> Cursos</a>
                    <a style="margin-left: 15px" href="{{route('categorias.index')}}" class="px-1 {{ Route::is('categorias.index') ? 'bg-blue-600 rounded' : '' }}"><i class='bx bx-grid-alt' style='color:#f7bd0c' ></i> Categorias</a>
                    <a style="margin-left: 15px" href="{{route('perfiles.index')}}" class="px-1 {{ Route::is('perfiles.index') ? 'bg-blue-600 rounded' : '' }}"><i class='bx bxs-user-circle' style='color:#f7bd0c' ></i> Perfiles</a>
                    @auth
                        <a style="margin-left: 15px" href="{{route('admin')}}" class="px-1 {{ Route::is('admin') ? 'bg-blue-600 rounded' : '' }}"><i class='bx bxs-user-rectangle' style='color:#f7bd0c' ></i> Administración</a>
                    @endauth
                </div>

                <div style="display: flex; justify-content: center; align-items: center; width: 20%">
                    @if (Route::has('login'))  {{--Verifica si existe la ruta--}}
                        @auth
                            <span style="display: flex; justify-content: center; align-items: center" class="mr-2"><i class='bx bxs-user-check' style='color:#f7bd0c' ></i> &nbsp; {{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button style="display: flex; justify-content: center; align-items: center" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class='bx bx-power-off' style='color:#f7bd0c' ></i> &nbsp;Salir  {{--{{ __('Log Out') }}--}}
                                </button>
                            </form>
                    @else
                        <i class='bx bx-log-in' style='color:#f7bd0c' ></i>&nbsp;<a style="display: flex; justify-content: center; align-items: center" href="{{ route('login') }}" class="text-sm text-white underline"> Iniciar sesión</a>

                            @if (Route::has('register'))
                            <i class='bx bx-registered ml-4' style='color:#f7bd0c' ></i><a style="display: flex; justify-content: center; align-items: center" href="{{ route('register') }}" class=" text-sm text-white underline">Regístrese</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <div class="container mx-auto my-4">
        <h1 class="py-1 px-3 text-blue-600">@yield('titleOption')</h1>
        <div class="bg-white py-3 px-3">
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



