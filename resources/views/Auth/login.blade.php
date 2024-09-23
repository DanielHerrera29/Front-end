@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="text-center mt-5">
        <img src="{{ asset('Image/vuelo.png') }}" style="width: 300px;">
        <h1 class="mt-3">Check a Seat</h1>
        <p>DILIGENCIA TU INFORMACIÓN</p>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Usuario" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña"
                        required>
                </div>
                <button type="submit" class="btn btn-dark-gray btn-lg w-100">Ingresar</button>

            </form>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Servicios</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h5>Información</h5>
                <ul class="list-unstyled">
                    <li>Reservas</li>
                    <li>Ofertas</li>
                    <li>Destinos</li>
                    <li>Check-in</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Enlaces</h5>
                <ul class="list-unstyled">
                    <li>Restricciones</li>
                    <li>Documentos requeridos</li>
                    <li>Aerocivil</li>
                    <li>Aeropuertos</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Legal</h5>
                <ul class="list-unstyled">
                    <li>Trabaja con nosotros</li>
                    <li>Ayuda</li>
                    <li>Contacto</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        blockquote {
            background-color: #f9f9f9;
            border-left: 10px solid #ccc;
            margin: 1.5em 10px;
            padding: 1em;
            border-radius: 10px;
        }

        .btn-dark-gray {
            background-color: #333;
            /* Gris oscuro */
            border-color: #333;
            /* Gris oscuro */
            color: white;
            /* Texto blanco */
        }

        .btn-dark-gray:hover {
            background-color: #000;
            /* Negro al hacer hover */
            border-color: #000;
            /* Negro */
        }

        h5 {
            color: #333;
            font-weight: bold;
        }

        .list-unstyled li {
            padding: 5px 0;
        }

        .row.text-center div {
            padding: 15px 0;
        }
    </style>
@endsection
