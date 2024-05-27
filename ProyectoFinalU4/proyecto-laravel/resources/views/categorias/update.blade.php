<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Categoría') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <h1 class="mb-4">Editar Categoría</h1>

        <form method="POST" action="{{ route('categorias.update', $categoria->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nombreCategoria">Nombre de la Categoría</label>
                <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control"
                    value="{{ $categoria->nombreCategoria }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        </form>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>