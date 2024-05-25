@extends('layout.app')

@section('content')
    <div class="text-primary d-flex justify-content-center mb-5 border-bottom border-primary">
        <h1>Opciones de turno</h1>
    </div>
    <div>
        <div class="card card-body col-6 m-auto shadow p-3 mb-5 bg-body-tertiary rounded">
            @foreach ($tipos as $item)
                <a type="button" href="{{ url('turno/' . $item->id) }}" class="btn btn-primary m-2">{{ $item->nombre }}</a>
            @endforeach
        </div>
    </div>
@endsection
