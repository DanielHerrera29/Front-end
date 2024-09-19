@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Crear Encuesta</h1>
                <form action="{{ route('encuestas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre_evento">Nombre del Evento</label>
                        <input type="text" name="nombre_evento" id="nombre_evento" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="poblacion">Población</label>
                        <input type="number" name="poblacion" id="poblacion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pregunta">Pregunta</label>
                        <input type="text" name="pregunta" id="pregunta" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Crear</button>
                </form>
            </div>
        </div>
    </div>
@endsection
