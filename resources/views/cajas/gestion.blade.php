@extends('layout.app')

@section('content')
    <div class="text-primary mb-5 border-bottom border-primary">
        <h1 class="text-center">Gestion del turno - Caja {{ $caja }}</h1>
    </div>
    <div>
        <div class="card card-body col-6 m-auto shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="text-center mb-2">
                <h1>
                    {{ $turno->tipo }} - {{ $turno->numero }}
                </h1>
            </div>
            <div class="d-flex justify-content-center ">
                <a href="{{ "/caja/atendido/{$caja}/{$turno->id}" }}" type="button" class="btn btn-outline-primary">
                    Marcar como atendido
                </a>
            </div>
        </div>
    </div>
@endsection
