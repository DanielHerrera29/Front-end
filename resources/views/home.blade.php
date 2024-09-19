@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <div class="container mt-5 text-center">
        <h1>Check at Seat</h1>
    </div>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Temas Destacados</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4><i class="bi bi-info-circle"></i> Tema 1</h4>
                        <p>Descripción 1</p>
                        <a href="#" class="btn btn-outline-secondary">Más Información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4><i class="bi bi-info-circle"></i> Tema 2</h4>
                        <p>Descripción 2</p>
                        <a href="#" class="btn btn-outline-secondary">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Tema 3 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4><i class="bi bi-info-circle"></i> Tema 3</h4>
                        <p>Descripción 3</p>
                        <a href="#" class="btn btn-outline-secondary">Más Información</a>
                    </div>
                </div>
            </div>
            <!-- Tema 4 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4><i class="bi bi-info-circle"></i> Tema 4</h4>
                        <p>Descripción 4</p>
                        <a href="#" class="btn btn-outline-secondary">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Testimonios</h2>
        <h4 class="text-center">Nuestros clientes</h4>
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>“Muy buen servicio”</p>
                    <footer class="blockquote-footer">Andrea, Hace 10 meses</footer>
                </blockquote>
                <blockquote class="blockquote">
                    <p>“Tuve inconvenientes, pero me los solucionaron rápido”</p>
                    <footer class="blockquote-footer">Marco, Hace 2 semanas</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>“Fácil de manejar”</p>
                    <footer class="blockquote-footer">Andrés, Hace 7 meses</footer>
                </blockquote>
                <blockquote class="blockquote">
                    <p>“Me facilitaron todo el proceso”</p>
                    <footer class="blockquote-footer">Jorge, Hace 1 mes</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>“Muy interactivo”</p>
                    <footer class="blockquote-footer">Sandra, Hace 2 meses</footer>
                </blockquote>
                <blockquote class="blockquote">
                    <p>“Nada por mejorar”</p>
                    <footer class="blockquote-footer">Sol, Hace 2 meses</footer>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Servicios</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h5>Información</h5>
                <ul class="list-unstyled">
                    <a class="nav-link" href="{{ route('usuarios.index') }}">Reservas</a>
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
                    <li>
                        <a class="nav-link" href="https://www.aerocivil.gov.co" target="_blank">Aerocivil</a>
                    </li>
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
