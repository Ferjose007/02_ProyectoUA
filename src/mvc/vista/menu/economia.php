<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../../styles.css">

</head>

<body>

    <style>
        .carousel-item {
            padding: 20px;
            background-color: #f8f9fa;
            /* Fondo claro para resaltar el contenido */
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .carousel-item h2 {
            color: #333;
        }

        .carousel-item img {
            object-fit: cover;
            max-height: 300px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
            /* Color de fondo negro */
            border-radius: 50%;
            /* Forma circular */
        }

        /* Aseguramos que el body ocupe todo el alto disponible */
        html,
        body {
            height: 100%;
            /* Necesitamos que la altura del body sea del 100% */
            margin: 0;
            /* Elimina márgenes por defecto */
            display: flex;
            flex-direction: column;
            /* Coloca los elementos en una columna */
        }

        /* Hacemos que el contenido ocupe el espacio restante */
        main {
            flex: 1;
            /* Esto hará que el main ocupe todo el espacio disponible */
        }

        /* Estilo del footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            width: 100%;
            margin-top: auto;
            /* Empuja el footer al final de la página */
        }
    </style>

    <!-- Cabecera -->
    <?php require '../../../menu.php' ?>

    <div id="newsCarousel3" class="carousel slide my-4" data-bs-ride="false">
        <div class="carousel-inner">
            <!-- Noticia 1 -->
            <div class="carousel-item active">
                <div class="container">
                    <h2 class="text-center fw-bold">APEC y Estado de Emergencia</h2>
                    <p class="text-center text-muted">Lima y Callao en Alerta ante el Gran Evento Internacional</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/economia/economia_01.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: RPP Noticias</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                Estado de emergencia en Lima y Callao por la Cumbre APEC.
                                Con la llegada de la Cumbre de Líderes del Foro de Cooperación Económica Asia-Pacífico (APEC), Lima y Callao están bajo estado de emergencia para garantizar la seguridad y el orden durante el evento internacional. La cumbre reunirá a representantes de economías clave del Pacífico, incluidos los presidentes de Estados Unidos, China y Japón.
                                El estado de emergencia, declarado en 14 distritos de Lima Metropolitana y Callao, tiene como objetivo contener posibles disturbios y asegurar que las delegaciones internacionales puedan desplazarse por la ciudad sin nconvenientes.
                                Impacto de la APEC en Lima:
                                La Cumbre APEC en Lima ha generado un refuerzo en la presencia policial y control de las calles, con patrullajes intensivos y bloqueos estratégicos en puntos clave en puntos clave para garantizar la seguridad.
                            </p>
                            <a href="#" class="btn btn-primary mt-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controles del Carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Pie de Página -->
    <footer class="bg-dark text-white text-center p-3">
        <p>&copy; 2024 Dilo fuerte Autónomo. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>