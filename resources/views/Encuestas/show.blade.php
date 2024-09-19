@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detalles de la Encuesta</h1>
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $encuesta->nombre_evento }}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Población: </strong> {{ $encuesta->poblacion }}</p>
                        <p><strong>Pregunta: </strong> {{ $encuesta->pregunta }}</p>
                        <a href="{{ route('encuestas.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
