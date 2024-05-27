<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorias Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        @if(Auth::user()->role == 3)
            <h1 class="mb-4"> Lista de Citas</h1>

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Cita</th>
                        <th>ID Cliente</th>
                        <th>Nombre Cliente</th>
                        <th>Fecha y Hora de la Cita</th>
                        <th>Motivo</th>
                        <th>Duración</th>
                        <th>Estado</th>
                        <th>Notas</th>
                        <th>ID Artista</th>
                        <th>Nombre Artista</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($citas)
                        @foreach ($citas as $cita)
                            <tr>
                                <td>{{ $cita->id }}</td>
                                <td>{{ $cita->idCliente }}</td>
                                <td>{{ $cita->cliente->name }}</td>
                                <td>{{ $cita->FechaHraCita }}</td>
                                <td>{{ $cita->Motivo }}</td>
                                <td>{{ $cita->Duracion }}</td>
                                <td>{{ $cita->Estado }}</td>
                                <td>{{ $cita->Notas }}</td>
                                <td>{{ $cita->idArtista }}</td>
                                <td>{{ $cita->artista->name }}</td>
                                <td>
                                    <a href="{{ url('/citas/' . $cita->id . '/edit') }}" class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ url('/citas/' . $cita->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Deseas borrar el registro?');">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11" class="text-center">No hay citas disponibles.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

            <div class="text-center bg-white p-4 rounded shadow mt-4">
                <h2>Más opciones</h2>
                <a href="{{ url('citas/insert') }}" class="btn btn-primary">Realizar una nueva cita</a>
            </div>
        @endif

        @if(Auth::user()->role != 3)
            <h1 class="mb-4">Mi Lista de Citas</h1>

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Cita</th>
                        <th>ID Cliente</th>
                        <th>Fecha y Hora de la Cita</th>
                        <th>Motivo</th>
                        <th>Duración</th>
                        <th>Estado</th>
                        <th>Notas</th>
                        <th>ID Artista</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($citas)
                        @foreach ($citas as $cita)
                            <tr>
                                <td>{{ $cita->id }}</td>
                                <td>{{ $cita->idCliente }}</td>
                                <td>{{ $cita->FechaHraCita }}</td>
                                <td>{{ $cita->Motivo }}</td>
                                <td>{{ $cita->Duracion }}</td>
                                <td>{{ $cita->Estado }}</td>
                                <td>{{ $cita->Notas }}</td>
                                <td>{{ $cita->idArtista }}</td>
                                <td>
                                    <a href="{{ url('/citas/' . $cita->id . '/edit') }}" class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ url('/citas/' . $cita->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Deseas borrar el registro?');">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9" class="text-center">No hay citas disponibles.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

            <div class="text-center bg-white p-4 rounded shadow mt-4">
                <h2>Más opciones</h2>
                <a href="{{ url('citas/insert') }}" class="btn btn-primary">Realizar una nueva cita</a>
            </div>
        @endif
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>