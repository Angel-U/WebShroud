<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TattoShop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{url('css/estilo.css')}}">
    </head>

    <body>

        <div class="container-md">
            <div class="row">
                <div class="row col-1">
                    <nav class="nav nav-pills nav-justified col-1 d-none d-md-block">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                        <a class="nav-link" href="categorias">Categorias</a>
                        @guest
                            <a class="nav-link" href="/register">Crear Cuenta</a>
                        @endguest
                    </nav>
                </div>

                <div id="carouselExampleCaptions" class="carousel slide col-md-9 offset-md-1 mb-4">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">

                        @foreach ($galerias as $galeria)
                            <div class="carousel-item active">
                                @if ($galeria->imagen)
                                    <img src="{{ asset('storage/' . $galeria->imagen) }}" alt="Imagen"
                                        class="d-block w-100 mismotamañoCarr" width="auto">
                                @else
                                    Sin imagen
                                @endif
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="shadow-sm">Tatuaje</h5>
                                    <p class="">Titulo: {{ $galeria->Titulo }}</p>
                                    <p class="">Descripcion: {{ $galeria->Descripcion }}</p>
                                    <p>Categoria: {{ $galeria->categoria->nombreCategoria }}</p>
                                    <p>Tatuaje Realizado por:{{ $galeria->artista->Nombre}} </p>
                                </div>
                            </div>
                        @endforeach



                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previa</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>




                <!--tarjetas
                        -->
                <div class="row mb-4">
                    @foreach ($Tarjetas as $tarjeta)

                        <div class="col-12 col-md-4 ">
                            <div class="card">

                                @if ($tarjeta->imagen)
                                    <img src="{{ asset('storage/' . $tarjeta->imagen) }}" alt="Imagen"
                                        class="card-img-top mismotamaño" width="auto">
                                @else
                                    Sin imagen
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $tarjeta->Titulo }}</h5>
                                    <p class="card-text">{{ $tarjeta->Descripcion }}</p>
                                    <p class="card-text">{{ $tarjeta->categoria->nombreCategoria}}</p>
                                    <p class="card-text">Tatuaje Realizado por: {{ $tarjeta->artista->Nombre}}</p>
                                    <a href="login" class="btn btn-primary">Agendar Cita</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <form action="{{ route('comentarios.store') }}" method="POST"
                        style="margin-top: 5%; margin-bottom: 5%;">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="nombre@mail.com">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono"
                                placeholder="10 dígitos">
                        </div>
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Dudas y comentarios</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar comentarios</button>
                    </form>



                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $('#formulario').submit(function (event) {
                                event.preventDefault();

                                var constraints = {
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
                                    comentarios: {
                                        presence: true,
                                        length: {
                                            minimum: 15,
                                            message: "Ingrese un comentario válido, mínimo 15 caracteres"
                                        }
                                    }
                                };

                                var formData = {
                                    email: $('#email').val(),
                                    telefono: $('#telefono').val(),
                                    comentarios: $('#comentarios').val()
                                };

                                var errors = validate(formData, constraints);
                                if (errors) {
                                    var errorMessage = '';
                                    if (errors.email) {
                                        errorMessage += errors.email.join('<br>');
                                    }
                                    if (errors.telefono) {
                                        errorMessage += '<br>' + errors.telefono.join('<br>');
                                    }
                                    if (errors.comentarios) {
                                        errorMessage += '<br>' + errors.comentarios.join('<br>');
                                    }
                                    $('#mensaje-error').html(errorMessage);
                                } else {
                                    $('#mensaje-error').html('');
                                    alert('Formulario enviado correctamente');
                                    $('#email').val('');
                                    $('#telefono').val('');
                                    $('#comentarios').val('');
                                }
                            });
                        });
                    </script>



                    <footer class="footer mt-auto py-3 bg-dark text-white">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 mb-4">
                                    <h5>Contacto</h5>
                                    <ul class="list-unstyled text-dark">
                                        <li>WebShroud</li>
                                        <li>Velasco Campos Cristian Daniel</li>
                                        <li>Rangel Diaz Gustavo Arnoldo</li>
                                        <li>Angel Uriel Martin del Campo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>



                </div>
            </div>

            <script src="{{ url('js/script.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                crossorigin="anonymous"></script>

    </body>

    </html>
</x-app-layout>