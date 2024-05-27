<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Citas Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <h3>Sección para insertar cliente</h3>
        <form action="{{ url('clientes') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="">
            </div>

            <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="">
            </div>

            <div class="form-group">
                <label for="Numero de telefono">Número de teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="">
            </div>

            <div class="form-group">
                <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechaNacim" id="fechaNacim" class="form-control" value="">
            </div>

            <div class="form-group">
                <label for="Correo Electronico">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="">
            </div>

            @if(Auth::user()->role == 1)
                <div class="form-group">
                    <label for="Rol">Rol</label>
                    <input type="text" name="role" id="role" class="form-control" value="">
                </div>
            @endif

            <div class="form-group">
                <label for="Contraseña">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" value="">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>