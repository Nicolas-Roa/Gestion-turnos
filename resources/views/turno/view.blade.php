@extends('layout.app')

@section('content')
    <div class="text-primary d-flex justify-content-center mb-5 border-bottom border-primary">
        <h1>Turno asignado</h1>
    </div>
    <div>
        <div class="card card-body col-6 m-auto shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="text-center">
                <h1>
                    {{ $turno->tipo }} - {{ $turno->numero }}
                </h1>
                <p>
                    Por favor, esperar al llamado del turno.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript" defer>
        $(function() {
            setTimeout(() => {
                window.location = '/';
            }, 5000);
        });
    </script>
@endsection
