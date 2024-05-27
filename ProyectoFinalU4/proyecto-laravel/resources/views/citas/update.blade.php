<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cita') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <h1 class="mb-4">Editar Cita</h1>

        <form method="POST" action="{{ url('/citas/' . $cita->id) }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="idCliente">ID Cliente</label>
                <input type="text" name="idCliente" id="idCliente" class="form-control" value="{{ $cita->idCliente }}"
                    required>
            </div>

            <div class="form-group">
                <label for="FechaHraCita">Fecha y Hora de la Cita</label>
                <input type="datetime-local" name="FechaHraCita" id="FechaHraCita" class="form-control"
                    value="{{ $cita->FechaHraCita }}" required>
            </div>

            <div class="form-group">
                <label for="Motivo">Motivo</label>
                <input type="text" name="Motivo" id="Motivo" class="form-control" value="{{ $cita->Motivo }}" required>
            </div>

            <div class="form-group">
                <label for="Duracion">Duración</label>
                <input type="text" name="Duracion" id="Duracion" class="form-control" value="{{ $cita->Duracion }}"
                    required>
            </div>

            <div class="form-group">
                <label for="Estado">Estado</label>
                <input type="text" name="Estado" id="Estado" class="form-control" value="{{ $cita->Estado }}" required>
            </div>

            <div class="form-group">
                <label for="Notas">Notas</label>
                <textarea name="Notas" id="Notas" class="form-control">{{ $cita->Notas }}</textarea>
            </div>

            <div class="form-group">
                <label for="idArtista">Artista</label>
                <select name="idArtista" id="idArtista" class="form-control" required>
                    @foreach ($artistasRol as $artista)
                        <option value="{{ $artista->id }}" {{ $artista->id == $cita->idArtista ? 'selected' : '' }}>
                            {{ $artista->name }}
                        </option>
                    @endforeach
                </select>
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