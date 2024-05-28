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


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#formulario').submit(function (event) {
                event.preventDefault();

                var constraints = {
                    name: {
                        presence: true,
                        length: {
                            minimum: 1,
                            message: "Ingrese un nombre válido"
                        }
                    },
                    apellido: {
                        presence: true,
                        length: {
                            minimum: 1,
                            message: "Ingrese un apellido válido"
                        }
                    },
                    telefono: {
                        presence: true,
                        numericality: {
                            onlyInteger: true,
                            message: "Ingrese solo números"
                        },
                        length: {
                            is: 10,
                            message: "El teléfono debe tener 10 dígitos"
                        }
                    },
                    @if(Auth::user()->role == 1)
                        role: {
                                presence: true,
                                length: {
                                    minimum: 1,
                                    message: "Ingrese un rol válido"
                                }
                            },
                    @endif
                @if(Auth::user()->role != 1)
                    password: {
                            presence: true,
                            length: {
                                minimum: 8,
                                message: "La contraseña debe tener al menos 8 caracteres"
                            }
                        },
                @endif
                fechaNacim: {
                        presence: true,
                        date: {
                            latest: new Date(new Date().setFullYear(new Date().getFullYear() - 18)),
                            message: "Debe ser mayor de 18 años"
                        }
                    },
                    email: {
                        presence: true,
                        email: {
                            message: "No es un formato de correo electrónico válido"
                        },
                        format: {
                            pattern: /^[^0-9][a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
                            message: "Debe ser un correo electrónico válido"
                        }
                    }
                };

                var formData = {
                    name: $('#nombre').val(),
                    apellido: $('#apellido').val(),
                    telefono: $('#telefono').val(),
                    @if(Auth::user()->role == 1)
                        role: $('#rol').val(),
                    @endif
                @if(Auth::user()->role != 1)
                    password: $('#password').val(),
                @endif
                fechaNacim: $('#fechaNacim').val(),
                    email: $('#email').val()
                };

                var errors = validate(formData, constraints);
                if (errors) {
                    var errorMessage = '';
                    if (errors.name) {
                        errorMessage += errors.name.join('<br>');
                    }
                    if (errors.apellido) {
                        errorMessage += '<br>' + errors.apellido.join('<br>');
                    }
                    if (errors.telefono) {
                        errorMessage += '<br>' + errors.telefono.join('<br>');
                    }
                    if (errors.fechaNacim) {
                        errorMessage += '<br>' + errors.fechaNacim.join('<br>');
                    }
                    if (errors.email) {
                        errorMessage += '<br>' + errors.email.join('<br>');
                    }
                    @if(Auth::user()->role == 1)
                        if (errors.role) {
                            errorMessage += '<br>' + errors.role.join('<br>');
                        }
                    @endif
                    @if(Auth::user()->role != 1)
                        if (errors.password) {
                            errorMessage += '<br>' + errors.password.join('<br>');
                        }
                    @endif
                    $('#mensaje-error').html(errorMessage);
                } else {
                    $('#mensaje-error').html('');
                    alert('Formulario enviado correctamente');
                    $('#nombre').val('');
                    $('#apellido').val('');
                    $('#telefono').val('');
                    @if(Auth::user()->role == 1)
                        $('#rol').val('');
                    @endif
                    @if(Auth::user()->role != 1)
                        $('#password').val('');
                    @endif
                    $('#fechaNacim').val('');
                    $('#email').val('');
                }
            });
        });
    </script>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</x-app-layout>