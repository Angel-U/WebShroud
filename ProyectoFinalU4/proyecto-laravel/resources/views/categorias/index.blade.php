<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorías') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Categorías</h1>

        <a href="{{ url('categorias/insert') }}" class="btn btn-primary mb-3">Agregar Nueva Categoría</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    @auth
                        @if(Auth::user()->role != 3)
                            <th>Acciones</th>
                        @endif
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombreCategoria }}</td>
                        @auth
                            @if(Auth::user()->role != 3)
                                <td>
                                    <a href="{{ url('/categorias/' . $categoria->id . '/edit') }}"
                                        class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ url('/categorias/' . $categoria->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Deseas borrar el registro?');">Borrar</button>
                                    </form>
                                </td>
                            @endif
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>