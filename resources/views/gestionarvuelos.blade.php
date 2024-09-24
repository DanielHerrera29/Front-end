@extends('layouts.app')

@section('title', 'Gestionar Vuelos')

@section('content')
    <div class="container mt-5 text-center">
        <h1>Check a Seat</h1>
    </div>
    <div class="container mt-5 text-center">
        <h2>Gestionar Vuelos</h2>
    </div>
    <div class="container mt-5 text-center">
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" placeholder="Buscar" name="buscar">
        </div>

        <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-plus"></i> Crear Vuelo</button>
    </div>

    <div class="container mt-5 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Ciudad Origen</th>
                    <th>Ciudad Destino</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Aerolinea</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bogota</td>
                    <td>Medellin</td>
                    <td>2024-09-15</td>
                    <td>8:00 AM</td>
                    <td>LATAM</td>
                    <td><i class="bi bi-pen"></i> <i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>Cali</td>
                    <td>Medellin</td>
                    <td>2024-09-16</td>
                    <td>10:30 PM</td>
                    <td>Avianca</td>
                    <td><i class="bi bi-pen"></i> <i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>Pasto</td>
                    <td>Bogota</td>
                    <td>2024-09-24</td>
                    <td>6:30 AM</td>
                    <td>Avianca</td>
                    <td><i class="bi bi-pen"></i> <i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>Bogota</td>
                    <td>Medellin</td>
                    <td>2024-09-30</td>
                    <td>3:00 PM</td>
                    <td>Ultra Air</td>
                    <td><i class="bi bi-pen"></i> <i class="bi bi-trash"></i></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap 5 and Bootstrap Icons CDN -->
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

        /* Footer estilos */
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
