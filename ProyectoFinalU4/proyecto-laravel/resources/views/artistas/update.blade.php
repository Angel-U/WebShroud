<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Artista') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <h1 class="mb-4">Editar Perfil</h1>

        <form method="POST" action="{{ url('/artistas/' . $artista->id) }}">
            @csrf
            @method('PATCH') <!-- Esto indica que el método HTTP utilizado será PATCH para la actualización -->

            <!-- Campo para el Nombre -->
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ $artista->Nombre }}"
                    required>
            </div>

            <!-- Campo para el Cliente Relacionado -->
            <div class="form-group">
                <label for="idUsuario">Cliente Relacionado</label>
                <select name="idUsuario" id="idUsuario" class="form-control" required>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ $cliente->id == $artista->idUsuario ? 'selected' : '' }}>
                            {{ $cliente->name }} {{ $cliente->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Campo para el Apellido Paterno -->
            <div class="form-group">
                <label for="ApellidoPaterno">Apellido Paterno</label>
                <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-control"
                    value="{{ $artista->ApellidoPaterno }}" required>
            </div>

            <!-- Campo para el Apellido Materno -->
            <div class="form-group">
                <label for="ApellidoMaterno">Apellido Materno</label>
                <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control"
                    value="{{ $artista->ApellidoMaterno }}" required>
            </div>

            <!-- Campo para el Correo Electrónico -->
            <div class="form-group">
                <label for="Correo">Correo Electrónico</label>
                <input type="email" name="Correo" id="Correo" class="form-control" value="{{ $artista->Correo }}"
                    required>
            </div>

            <!-- Campo para el Número de Teléfono -->
            <div class="form-group">
                <label for="NumTel">Número de Teléfono</label>
                <input type="text" name="NumTel" id="NumTel" class="form-control" value="{{ $artista->NumTel }}"
                    required>
            </div>

            <!-- Campo para la Especialidad -->
            <div class="form-group">
                <label for="Especialidad">Especialidad</label>
                <input type="text" name="Especialidad" id="Especialidad" class="form-control"
                    value="{{ $artista->Especialidad }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>