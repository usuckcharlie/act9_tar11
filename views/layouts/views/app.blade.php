<!DOCTYPE html>
<html>
<head>
    <title>Menús Laravel</title>
    </head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('photos') }}" class="{{ request()->routeIs('photos') ? 'active' : '' }}">Fotos</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contacto</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer>
        Desarrollado por: [Tu nombre]
    </footer>
</body>
</html>