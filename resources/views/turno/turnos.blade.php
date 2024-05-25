@extends('layout.app')

@section('content')
    <div class="text-primary mb-5 border-bottom border-primary">
        <h1 class="text-center">Turnos</h1>
    </div>
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <td class="bg-primary text-white text-center">
                        <h1>Modulo</h1>
                    </td>
                    <td class="bg-primary text-white text-center">
                        <h1>
                            Turno
                        </h1>
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($turnos as $item)
                    <tr>
                        <td class="bg-primary text-white text-center">
                            <h1>{{ $item->caja }}</h1>
                        </td>
                        <td class="bg-primary text-white text-center">
                            <h1>{{ $item->tipo . ' - ' . $item->numero }}</h1>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
