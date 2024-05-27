<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title m-0">Editar Perfil</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('/clientes/' . $user->id) }}">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="name" id="nombre" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellidos</label>
                        <input type="text" name="apellido" id="apellido" class="form-control"
                            value="{{ $user->apellido }}">
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Número de teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control"
                            value="{{ $user->telefono }}">
                    </div>
                    @if(Auth::user()->role == 1)
                        <div class="mb-3">
                            <label for="role" class="form-label">Rol</label>
                            <input type="text" name="role" id="rol" class="form-control" value="{{ $user->role }}">
                        </div>
                    @endif
                    @if(Auth::user()->role != 1)

                        <div class="mb-3" hidden>
                            <label for="role" class="form-label" hidden>Rol</label>
                            <input type="text" name="role" id="rol" class="form-control" value="{{ $user->role }}" hidden>
                        </div>
                    @endif

                    @if(Auth::user()->role != 1)
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="fechaNacim" class="form-label">Fecha de nacimiento</label>
                        <input type="date" name="fechaNacim" id="fechaNacim" class="form-control"
                            value="{{ $user->fechaNacim }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</x-app-layout>