@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Encuestas</h1>
                <a href="{{ route('encuestas.create') }}" class="btn btn-primary">Crear Encuesta</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Evento</th>
                            <th>Población</th>
                            <th>Pregunta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($encuestas as $encuesta)
                            <tr>
                                <td>{{ $encuesta->id }}</td>
                                <td>{{ $encuesta->nombre_evento }}</td>
                                <td>{{ $encuesta->poblacion }}</td>
                                <td>{{ $encuesta->pregunta }}</td>
                                <td>
                                    <a href="{{ route('encuestas.show', $encuesta->id) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('encuestas.edit', $encuesta->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('encuestas.destroy', $encuesta->id) }}" method="POST"
                                        style="display:inline-block;">
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
