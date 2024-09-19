@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detalles del Usuario</h1>
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $usuario->nombre }} {{ $usuario->apellido }}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Cédula: </strong> {{ $usuario->cedula }}</p>
                        <p><strong>Nombre: </strong> {{ $usuario->nombre }}</p>
                        <p><strong>Apellido: </strong> {{ $usuario->apellido }}</p>
                        <p><strong>Área: </strong> {{ $usuario->area }}</p>
                        <p><strong>Correo: </strong> {{ $usuario->correo }}</p>
                        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
