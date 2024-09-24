@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

    <div class="container mt-5 text-center">
        <h1>Contacto</h1>
    </div>
    <div class="container mt-5 text-center">
        <h2></h2>
    </div>
   
    <div class="card-body mb-3">
        <form class="mb-4">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="nombre" placeholder="Value">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                </div>
            </div>

            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo electronico</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="apellido" placeholder="Value">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                </div>
            </div>

            <div class="mb-3">
                <label for="Telefono" class="form-label">Telefono</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="Telefono" placeholder="Value">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                </div>
            </div>

            <div class="mb-3">
                <label for="Mensaje" class="form-label">Mensaje</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="mensaje" placeholder="Value">
                    <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Enviar</button>
        </form>
        <br/>
    </div>
    <br/>
    <br>
    <div class="info">
        <h2>¿Tienes alguna duda?</h2>
        <p>Si deseas consultar mayor información sobre nuestros servicios o tienes alguna duda al respecto, no dudes en contactarnos.</p>
    </div>

    <!-- Bootstrap 5 and Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <div class="servicios">
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

        .card-body {
      
      width: 50%;
      padding: 30px;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      border-radius: 10px;
      float: right;
      }

      .navbar {
  background-color: #c4c3c3; 
  padding: 10px;
  border-bottom: 1px solid #ccc;
  text-align: right; 
}

.navbar ul {
 

  direction: ltr;
}

.navbar li {
  display: inline-block;
  margin-right: 20px;
  text-align: right;
}

.navbar a {
  text-decoration: none;
  color: #000; 
  transition: color 0.2s ease;
}

.navbar a:hover {
  color: #333;
  text-align: right;
}


.servicios{
  margin-top: auto;
  width: 100%;
  background-color: #f9f9f9;
  padding: 20px;
  border: 1px solid #000000;
  clear: both;
        }

    .info{
           width: 50%;
           padding: 10%;
     
        }

       
    </style>
@endsection
