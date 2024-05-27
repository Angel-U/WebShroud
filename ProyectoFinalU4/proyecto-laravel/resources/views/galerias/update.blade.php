<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Galería') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Editar Galería</h1>

        <form method="POST" action="{{ route('galerias.update', $galeria->id) }}" enctype="multipart/form-data"
            class="max-w-md mx-auto">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label for="Titulo" class="block mb-2">Título</label>
                <input type="text" name="Titulo" id="Titulo" class="form-input" value="{{ $galeria->Titulo }}" required>
            </div>

            <div class="mb-4">
                <label for="Descripcion" class="block mb-2">Descripción</label>
                <textarea name="Descripcion" id="Descripcion" class="form-textarea"
                    required>{{ $galeria->Descripcion }}</textarea>
            </div>

            <div class="mb-4">
                <label for="idCategoria" class="block mb-2">Categoría</label>
                <select name="idCategoria" id="idCategoria" class="form-select" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $categoria->id == $galeria->idCategoria ? 'selected' : '' }}>
                            {{ $categoria->nombreCategoria }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="idArtista" class="block mb-2">Artista</label>
                <select name="idArtista" id="idArtista" class="form-select" required>
                    <option value="">Selecciona un artista</option>
                    @foreach ($artistas as $artista)
                        <option value="{{ $artista->id }}" {{ $artista->id == $galeria->idArtista ? 'selected' : '' }}>
                            {{ $artista->Nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="imagen" class="block mb-2">Imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-input">
                @if ($galeria->imagen)
                    <img src="{{ asset('storage/' . $galeria->imagen) }}" alt="Imagen" class="mt-2"
                        style="max-width: 100px;">
                @endif
            </div>

            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        </form>
    </div>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>