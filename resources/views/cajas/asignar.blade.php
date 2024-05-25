@extends('layout.app')

@section('content')
    <div class="text-primary mb-5 border-bottom border-primary">
        <h1 class="text-center">Turnos sin asignar</h1>
    </div>
    <div class="p-2">
        <div class="card card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>
                            Numero
                        </td>
                        <td>
                            Estado
                        </td>
                        <td>
                            Opciones
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($turnos as $item)
                        <tr>
                            <td>
                                {{ $item->tipo }} - {{ $item->numero }}
                            </td>
                            <td>
                                @if ($item->estado == 1)
                                    <span class="badge text-bg-danger">Sin atender</span>
                                @else
                                    <span class="badge text-bg-success">Atendido</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ "/caja/tomar/{$caja}/{$item->id}" }}" class="text-secondary-emphasis"
                                    title="Ver turnos">
                                    <i class="fa-solid fa-circle-down"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
