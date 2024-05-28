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
                <input type="text" name="name" id="name" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="Numero de telefono">Número de teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="" maxlength="10"
                    pattern="[0-9]*" required>
            </div>


            <div class="form-group">
                <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechaNacim" id="fechaNacim" class="form-control" value="" required>
            </div>


            <div class="form-group">
                <label for="Correo Electronico">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="" required>
            </div>

            @if(Auth::user()->role == 1)
                <div class="form-group">
                    <label for="Rol">Rol</label>
                    <input type="text" name="role" id="role" class="form-control" value="" required>
                </div>
            @endif

            <div class="form-group">
                <label for="Contraseña">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" value="" required>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
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
                password: {
                        presence: true,
                        length: {
                            minimum: 8,
                            message: "La contraseña debe tener al menos 8 caracteres"
                        }
                    }
                };

                var formData = {
                    name: $('#name').val(),
                    apellido: $('#apellido').val(),
                    telefono: $('#telefono').val(),
                    fechaNacim: $('#fechaNacim').val(),
                    email: $('#email').val(),
                    @if(Auth::user()->role == 1)
                        role: $('#role').val(),
                    @endif
                password: $('#password').val()
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
                    if (errors.password) {
                        errorMessage += '<br>' + errors.password.join('<br>');
                    }
                    $('#mensaje-error').html(errorMessage);
                } else {
                    $('#mensaje-error').html('');
                    alert('Formulario enviado correctamente');
                    $('#name').val('');
                    $('#apellido').val('');
                    $('#telefono').val('');
                    $('#fechaNacim').val('');
                    $('#email').val('');
                    @if(Auth::user()->role == 1)
                        $('#role').val('');
                    @endif
                    $('#password').val('');
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