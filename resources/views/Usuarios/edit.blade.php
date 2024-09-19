@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar Usuario</h1>
                <form action="{{ route('usuarios.update', $usuario->idusuario) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="text" name="cedula" id="cedula" class="form-control" value="{{ $usuario->cedula }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                            value="{{ $usuario->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control"
                            value="{{ $usuario->apellido }}" required>
                    </div>
                    <div class="form-group">
                        <label for="area">Área</label>
                        <input type="text" name="area" id="area" class="form-control"
                            value="{{ $usuario->area }}" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control"
                            value="{{ $usuario->correo }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
