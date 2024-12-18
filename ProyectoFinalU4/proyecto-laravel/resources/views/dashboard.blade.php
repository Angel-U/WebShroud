<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes Dashboard') }}
        </h2>
    </x-slot>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio Boostrap</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{url('css/estilo.css')}}">
    </head>

    <body>
        <div class="container-md">
            <div class="row">

                <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                </li>
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="/formulario">Agendar cita</a>
                                    </li>
                                @endauth
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="/formulario">Agendar cita</a>
                                    </li>
                                @endguest
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Categorías</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Artistas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contacto</a>
                                </li>
                                @auth
                                    <li class="nav-item">
                                        <a class="negritas nav-link" href="#">Bienvenido {{ auth()->user()->name }}</a>
                                    </li>
                                    <li class="nav-item nav-item-logout">
                                        <a class="nav-link" href="/login">Cerrar Sesión</a>
                                    </li>
                                @endauth
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Iniciar Sesión</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/register">Crear cuenta</a>
                                    </li>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </nav>-->

                <div class="row col-1">
                    <nav class="nav nav-pills nav-justified col-1 d-none d-md-block">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                        <a class="nav-link" href="#">Razas</a>
                        <a class="nav-link" href="#">Ver más</a>
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
                        <div class="carousel-item active">
                            <img src="img/images.jpg" class="d-block w-100 mismotamañoCarr" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="shadow-sm">Golden Retriever</h5>
                                <p class="">Los Golden Retrievers son perros de tamaño mediano a grande conocidos por su
                                    amabilidad,
                                    inteligencia y disposición cariñosa.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/imatec.png" class="d-block w-100 mismotamañoCarr" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Rottweiler</h5>
                                <p>El Rottweiler es una raza de perro robusta y poderosa que se originó en Alemania. Son
                                    conocidos por su lealtad y naturaleza protectora hacia sus familias.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/img5.jpg" class="d-block w-100 mismotamañoCarr" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Husky Siberiano</h5>
                                <p>El Husky Siberiano es una raza de perro de tamaño mediano conocida por su hermoso
                                    pelaje
                                    espeso y su aspecto similar al de un lobo.</p>
                            </div>
                        </div>
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


                <div class="row mb-4">
                    <div class="col-12 col-md-4 ">
                        <div class="card">
                            <img src="img/OIP.jpg" class="card-img-top mismotamaño" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Perros pequeños</h5>
                                <p class="card-text">Explora las mejores fotografias de perros pequeños.</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img src="img/img3.jpg" class="card-img-top mismotamaño" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Perros inteligentes</h5>
                                <p class="card-text">Explora las mejores fotografias de perros inteligentes.</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img src="img/img4.jpg" class="card-img-top mismotamaño" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Perros Tiernos</h5>
                                <p class="card-text">Explora las mejores fotografias de perritos pequeños y tiernos.</p>
                                <a href="#" class="btn btn-primary">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g1.jpg" class="img-thumbnail gtamaño" alt="...">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g2.jpg" class="img-thumbnail gtamaño" alt="...">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g3.jpg" class="img-thumbnail gtamaño" alt="...">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g4.jpg" class="img-thumbnail gtamaño" alt="...">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g5.jpg" class="img-thumbnail gtamaño" alt="...">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g6.jpg" class="img-thumbnail gtamaño" alt="...">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g7.png" class="img-thumbnail gtamaño" alt="...">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g8.jpg" class="img-thumbnail gtamaño" alt="...">
                    </div>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="img/g9.jpg" class="img-thumbnail gtamaño" alt="...">
                    </div>
                </div>


                <div class="row" id="product-gallery">
                    <!-- Carga el js aqui -->
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form id="formulario">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="" class="form-control" id="email" name="email"
                                        placeholder="nombre@mail.com">
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono"
                                        placeholder="10 dígitos">
                                </div>
                                <div class="mb-3">
                                    <label for="comentarios" class="form-label">Dudas y comentarios</label>
                                    <textarea class="form-control" id="comentarios" name="comentarios"
                                        rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar comentarios</button>
                            </form>
                            <div id="mensaje-error" class="mt-3" style="color: red;"></div>
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



                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contacto</h5>
                        <p class="card-text">WebShroud.</p>
                    </div>
                </div>

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