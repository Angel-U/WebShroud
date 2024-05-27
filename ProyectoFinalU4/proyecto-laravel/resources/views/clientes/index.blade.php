<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        @if(Auth::user()->role != 1)
            <h1 class="mb-4">Datos del perfil</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Cliente</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Numero de Telefono</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>  
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->apellido }}</td>
                        <td hidden>{{ $user->role }}</td>
                        <td>{{ $user->telefono }}</td>
                        <td>{{ $user->fechaNacim }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{url('/clientes/' . $user->id . '/edit')}}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ url('/clientes/' . $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Deseas borrar el registro?');">Borrar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endif

        @if(Auth::user()->role == 1)
            <h1 class="mb-4">Lista de Usuarios</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Cliente</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Numero de Telefono</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Rol</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->apellido }}</td>
                            <td>{{ $user->telefono }}</td>
                            <td>{{ $user->fechaNacim }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ url('/clientes/' . $user->id . '/edit') }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ url('/clientes/' . $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Deseas borrar el registro?');">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center mt-5">
                <h1>Menú de opciones</h1>
                <ul class="list-unstyled">
                    <li class="my-2"><a href="{{ url('clientes/insert') }}" class="btn btn-primary">Insertar un nuevo
                            cliente</a></li>
                </ul>
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