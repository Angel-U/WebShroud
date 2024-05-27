<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Nuevo Artista') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <h1 class="mb-4">Insertar Artista</h1>

        <form action="{{ url('artistas') }}" method="POST" id="nuevoArtistaForm">
            @csrf

            <div class="form-group">
                <label for="idUsuario">Cliente Relacionado</label>
                <select name="idUsuario" id="idUsuario" class="form-control" required>
                    <option value="">Selecciona un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" data-apellido="{{ $cliente->apellido}}"
                            data-telefono="{{ $cliente->telefono }}" data-correo="{{ $cliente->email }}">
                            {{ $cliente->name }} {{ $cliente->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" id="Nombre" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="ApellidoM">Apellido Paterno</label>
                <input type="text" name="ApellidoPaterno" id="ApellidoM" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="ApellidoP">Apellido Materno</label>
                <input type="text" name="ApellidoMaterno" id="ApellidoP" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="NumTel">Número de Teléfono</label>
                <input type="text" name="NumTel" id="NumTel" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="Correo">Correo</label>
                <input type="email" name="Correo" id="Correo" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="Especialidad">Especialidad</label>
                <input type="text" name="Especialidad" id="Especialidad" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>

    <script>
        document.getElementById('idUsuario').addEventListener('change', function () {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('Nombre').value = selectedOption.textContent.trim();
            document.getElementById('ApellidoM').value = selectedOption.getAttribute('data-apellido');
            document.getElementById('ApellidoP').value = selectedOption.getAttribute('data-apellido');
            document.getElementById('NumTel').value = selectedOption.getAttribute('data-telefono');
            document.getElementById('Correo').value = selectedOption.getAttribute('data-correo');
        });
    </script>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>