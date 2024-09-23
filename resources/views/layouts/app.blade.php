<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Proyecto Monitoria')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('Image/icon.png') }}" style="height: 50px;">
            </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios.index') }}">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('encuestas.index') }}">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('encuestas.index') }}">Destinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('encuestas.index') }}">Check-in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('encuestas.index') }}">Ayuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('encuestas.index') }}">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="{{ route('register') }}">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="{{ route('login') }}">Ingresa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
