<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnologia</title>
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
                    <h2 class="text-center fw-bold">La Guerra por la Atención Digital en Perú</h2>
                    <p class="text-center text-muted">Coolbox lidera la Transformación</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/tecnología/tecnologia_01.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: Gestión</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                El panorama publicitario en Perú ha experimentado un giro histórico. La inversión en publicidad digital está redefiniendo las reglas del juego, superando todas las expectativas. A nivel global, 2023 marcó un récord con una inversión de $271,600 millones en publicidad digital, un 3.7% más que el año anterior, reflejando el voraz interés de los Millennials y la Generación Z por los medios digitales.
                                Esta tendencia se siente con fuerza en Perú, donde las proyecciones para el cierre de 2024 apuntan a una inversión récord de hasta $520 millones en el ámbito digital, impulsada principalmente por los sectores de higiene, alimentos, cuidado personal y retail.
                                Coolbox: un ejemplo de éxito en la transformación digital
                                Coolbox, una empresa tecnológica peruana con más de 25 años de experiencia, ha logrado un éxito notable en su transformación digital.
                                Desde que apostó por el comercio electrónico en 2020, ha experimentado un crecimiento del 220% en solo unos años. Hoy, con más de 100 tiendas físicas y mil empleados, Coolbox ha superado a sus competidores gracias a su estrategia digital y alianzas con plataformas de entrega rápida como Rappi y PedidosYa.
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