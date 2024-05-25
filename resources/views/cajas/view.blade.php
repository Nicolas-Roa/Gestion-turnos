@extends('layout.app')

@section('content')
    <div class="text-primary mb-5 border-bottom border-primary">
        <h1 class="text-center">Cajas</h1>
    </div>
    <div class="p-2">
        <div class="card card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>
                            N° Caja
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
                    @foreach ($cajas as $item)
                        <tr>
                            <td>
                                {{ $item->numero }}
                            </td>
                            <td>
                                @if ($item->estado == 1)
                                    <span class="badge text-bg-success">Activo</span>
                                @else
                                    <span class="badge text-bg-danger">Inactivo</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ '/caja/' . $item->id }}" class="text-secondary-emphasis" title="Ver turnos">
                                    <i class="fa-solid fa-clipboard-list"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
