<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artistas Dashboard') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Artistas</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            @auth
                @if(Auth::user()->role == 2)
                    <h1 class="mb-4">Datos del perfil</h1>
                    <table class="table table-striped">
                        <thead class="thead-dark">
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
                                <td>{{ $artista->id }}</td>
                                <td>{{ $artista->name }}</td>
                                <td>{{ $artista->apellido }}</td>
                                <td>{{ $artista->telefono }}</td>
                                <td>{{ $artista->fechaNacim }}</td>
                                <td>{{ $artista->email }}</td>
                                <td>
                                    <a href="{{url('/artistas/' . $artista->id . '/edit')}}"
                                        class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{ url('/artistas/' . $artista->id) }}" method="POST" class="d-inline">
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
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID Cliente</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Correo</th>
                                <th>NumTel</th>
                                <th>Especialidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artistas as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->Nombre }}</td>
                                    <td>{{ $user->ApellidoPaterno }}</td>
                                    <td>{{ $user->ApellidoMaterno }}</td>
                                    <td>{{ $user->Correo }}</td>
                                    <td>{{ $user->NumTel }}</td>
                                    <td>{{ $user->Especialidad }}</td>
                                    <td>
                                        <a href="{{ url('/artistas/' . $user->id . '/edit') }}"
                                            class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ url('/artistas/' . $user->id) }}" method="POST" class="d-inline">
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
                        <a href="{{url('artistas/insert')}}" class="btn btn-primary">Insertar un nuevo Artista</a>
                    </div>
                @endif
            @endauth
        </div>

        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
</x-app-layout>