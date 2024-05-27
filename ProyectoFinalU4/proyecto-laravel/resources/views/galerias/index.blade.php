<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galerías de Artistas') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Lista de Galerías</h1>
        <a href="{{ url('galerias/insert') }}" class="btn btn-primary mb-4">Agregar Nueva Galería</a>

        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Título</th>
                    <th class="px-4 py-2">Descripción</th>
                    <th class="px-4 py-2">Categoría</th>
                    <th class="px-4 py-2">Nombre Categoria</th>
                    <th class="px-4 py-2">Artista</th>
                    <th class="px-4 py-2">Nombre del Artista</th>
                    <th class="px-4 py-2">Imagen</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galerias as $galeria)
                    <tr>
                        <td class="border px-4 py-2">{{ $galeria->id }}</td>
                        <td class="border px-4 py-2">{{ $galeria->Titulo }}</td>
                        <td class="border px-4 py-2">{{ $galeria->Descripcion }}</td>
                        <td class="border px-4 py-2">{{ $galeria->idCategoria }}</td>
                        <td class="border px-4 py-2">{{ $galeria->categoria->nombreCategoria }}</td>
                        <td class="border px-4 py-2">{{ $galeria->idArtista }}</td>
                        <td class="border px-4 py-2">{{ $galeria->artista->Nombre }}</td>
                        <td class="border px-4 py-2">
                            @if ($galeria->imagen)
                                <img src="{{ asset('storage/' . $galeria->imagen) }}" alt="Imagen" class="w-24">
                            @else
                                Sin imagen
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('galerias.edit', $galeria->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('galerias.destroy', $galeria->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Deseas borrar la galería?');">Borrar</button>
                            </form>
                        </td>
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