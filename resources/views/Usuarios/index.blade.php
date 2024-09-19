@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Lista de Usuarios</h1>
                <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear Usuario</a>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Área</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->idusuario }}</td>
                                <td>{{ $usuario->cedula }}</td>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->apellido }}</td>
                                <td>{{ $usuario->area }}</td>
                                <td>{{ $usuario->correo }}</td>
                                <td>
                                    <a href="{{ route('usuarios.show', $usuario->idusuario) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('usuarios.edit', $usuario->idusuario) }}"
                                        class="btn btn-warning">Editar</a>
                                    <form action="{{ route('usuarios.destroy', $usuario->idusuario) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
