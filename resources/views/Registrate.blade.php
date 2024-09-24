@extends('layouts.app')

@section('title', 'Registrate')

@section('content')
    <div class="container mt-5 text-center">
        <h1>Check a Seat</h1>
    </div>
    <div class="container mt-5 text-center">
        <h2>Registrate</h2>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="nombre" placeholder="Value">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                </div>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="apellido" placeholder="Value">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="email" placeholder="Value">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                </div>
            </div>

            <div class="mb-3">
                <label for="celular" class="form-label">Celular</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="email" placeholder="Value">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Enviar</button>
        </form>
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
