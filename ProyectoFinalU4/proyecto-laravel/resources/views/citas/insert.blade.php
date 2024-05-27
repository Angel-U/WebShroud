<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Nueva Cita') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        @auth
            <h1 class="mb-4">Insertar Cita</h1>
            <form action="{{ url('citas') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="idCliente">Cliente</label>
                    <select name="idCliente" id="idCliente" class="form-control" required>
                        <option value="">Selecciona un cliente</option>
                        @foreach($clientesRol as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="FechaHraCita">Fecha y Hora de la Cita</label>
                    <input type="datetime-local" name="FechaHraCita" id="FechaHraCita" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Motivo">Motivo</label>
                    <input type="text" name="Motivo" id="Motivo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Duracion">Duración</label>
                    <input type="text" name="Duracion" id="Duracion" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Estado">Estado</label>
                    <input type="text" name="Estado" id="Estado" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Notas">Notas</label>
                    <textarea name="Notas" id="Notas" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="idArtista">Artista</label>
                    <select name="idArtista" id="idArtista" class="form-control" required>
                        <option value="">Selecciona un artista</option>
                        @foreach($artistasRol as $artista)
                            <option value="{{ $artista->id }}">{{ $artista->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Agregar</button>
            </form>
        @endauth
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>