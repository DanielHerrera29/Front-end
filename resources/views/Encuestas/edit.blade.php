@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar Encuesta</h1>
                <form action="{{ route('encuestas.update', $encuesta->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre_evento">Nombre del Evento</label>
                        <input type="text" name="nombre_evento" id="nombre_evento" class="form-control"
                            value="{{ $encuesta->nombre_evento }}" required>
                    </div>
                    <div class="form-group">
                        <label for="poblacion">Población</label>
                        <input type="number" name="poblacion" id="poblacion" class="form-control"
                            value="{{ $encuesta->poblacion }}" required>
                    </div>
                    <div class="form-group">
                        <label for="pregunta">Pregunta</label>
                        <input type="text" name="pregunta" id="pregunta" class="form-control"
                            value="{{ $encuesta->pregunta }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
