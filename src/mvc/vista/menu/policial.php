<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policial</title>
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
                    <h2 class="text-center fw-bold">Darwin Condori</h2>
                    <p class="text-center text-muted">El Suboficial de Policía y el Brutal Asesinato de Sheyla Cóndor</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/policial/policial_01.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: El Comercio</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                Darwin Condori, un suboficial de la Policía Nacional del Perú, es señalado como el autor del brutal feminicidio de Sheyla Cóndor, cuyo cuerpo fue encontrado desmembrado en su departamento en Comas. La grabación de un video horas antes de su muerte ha suscitado nuevas interrogantes sobre su culpabilidad y las circunstancias que rodean el crimen.
                                Condori grabó un video comprometiéndose a pagar por un auto frente a la comisaría Santa Luzmila, donde su madre intentó sin éxito denunciar la desaparición de Sheyla. Este hecho ha llevado a las autoridades a especular que el suboficial planeaba usar el vehículo para ocultar los restos de la víctima. En el video, Condori se muestra tranquilo mientras discute el acuerdo, lo que ha generado aún más inquietud sobre su estado mental y su implicación en el crimen. Pocos días después de la grabación, Condori se suicidó en un hostal de San Juan de Lurigancho, lo que intensificó la atención mediática sobre el caso.
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