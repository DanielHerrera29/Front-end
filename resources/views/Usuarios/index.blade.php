@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
<div class="container mt-5 text-left" style="height: 100px;background-color: #F5F5F5;">
    <h1>Gestionar Usuarios</h1>
</div>
<div class="card-body">

    <div class="mb-5" style="text-align: right;">
        <button class="btn btn-outline-success">
            <i class="bi bi-plus"></i> Crear Usuario
        </button>
    </div>

<<<<<<< HEAD
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Daniel Agudelo Mazo</th>
                <td>dagudelomma@poligran.edu.co</td>
                <td>Administrador</td>
                <td>
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-pen-fill"></i>
                    </button>
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>

            </tr>
            <tr>
                <th>Wherrera@poligran.edu.co</th>
                <td>Wherrera@poligran.edu.co</td>
                <td>Visualizador</td>
                <td>
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-pen-fill"></i>
                    </button>
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>

            <tr>
                <th>Wherrera@poligran.edu.co</th>
                <td>Wherrera@poligran.edu.co</td>
                <td>Visualizador</td>
                <td>
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-pen-fill"></i>
                    </button>
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <th>lfarteaga@poligran.edu.co</th>
                <td>lfarteaga@poligran.edu.co</td>
                <td>Administrador</td>
                <td>
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-pen-fill"></i>
                    </button>
                    <button class="btn btn-outline-danger">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>

<!-- Bootstrap 5 and Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
<div class="container mt-5">
    <!-- <h2 class="text-center mb-4">Servicios</h2> -->
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
=======
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
>>>>>>> 69a2d87dc1ce694e5150c7282817f3861aa28e9d
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