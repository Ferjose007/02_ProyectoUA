<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dilo fuerte Autónomo - Noticias</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Cabecera -->
    <?php require 'menu.php' ?>

    <!-- Sección Hero -->
    <section class="hero bg-light text-dark text-center p-5">
        <h2 class="fs-3 fw-bold mb-4">Las noticias más relevantes y actualizadas al instante</h2>
        <p class="fs-5">Mantente informado con los eventos más importantes alrededor del mundo, en tiempo real.</p>
    </section>

    <!-- Contenido de Noticias -->
    <main class="container py-4">

        <!-- Fila de Noticias (3 Medianas) -->
        <div class="row mb-4">
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="mvc/vista/menu/politica.php" class="text-decoration-none">
                    <div class="card news-card">
                        <img src="img/portada/Imagen_noticia_politica.png" class="card-img-top" alt="Noticia 1">
                        <div class="card-body">
                            <h5 class="card-title">POLÍTICA</h5>
                            <p class="card-text">El adiós a un legado controversial</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="mvc/vista/menu/internacional.php?slide=3" class="text-decoration-none">
                    <div class="card news-card">
                        <img src="img/portada/Imagen_noticiainternacional_01.png" class="card-img-top" alt="Noticia 2">
                        <div class="card-body">
                            <h5 class="card-title">INTERNACIONAL</h5>
                            <p class="card-text">Operativos de control en la frontera con bolivia: Seguridad y control migratorio en desaguardo</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="mvc/vista/menu/sociedad.php" class="text-decoration-none">
                    <div class="card news-card">
                        <img src="img/portada/Imagen_sociedad.png" class="card-img-top" alt="Noticia 3">
                        <div class="card-body">
                            <h5 class="card-title">SOCIEDAD</h5>
                            <p class="card-text">"Nosotros no somos culpables ni responsables del pasado, pero sí de nuestro presente y futuro"</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Fila de Noticias (1 Grande) -->
        <div class="row mb-4">
            <div class="col-12">
                <a href="mvc/vista/menu/internacional.php?slide=1" class="text-decoration-none">
                    <div class="card news-card news-card-large">
                        <img src="img/portada/Imagen_noticiainternacional_02.png" class="card-img-top" alt="Noticia 4">
                        <div class="card-body">
                            <h5 class="card-title">INTERNACIONAL</h5>
                            <p class="card-text">
                                Corea del Sur impone "LEY MARCIAL"
                                SOLO DURÓ 6 HORAS
                                El 3 de diciembre, el presidente surcoreano Yoon Suk-Yeol declaró la ley marcial argumentando amenazas de "fuerzas antiestatales" y tensiones con Corea del Norte. La medida ha generado controversia, siendo vista por críticos como un intento de consolidar poder en medio de escándalos y conflictos con la oposición.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Fila de Noticias (3 Medianas) -->
        <div class="row mb-4">
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="mvc/vista/menu/policial.php" class="text-decoration-none">
                    <div class="card news-card">
                        <img src="img/portada/Imagen_policial.png" class="card-img-top" alt="Noticia 5">
                        <div class="card-body">
                            <h5 class="card-title">POLICIAL</h5>
                            <p class="card-text">Feminicidio en comas impacta al Perú, suboficial de policía acusado de asesinar a Sheyla Cóndor.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="mvc/vista/menu/cultura.php" class="text-decoration-none">
                    <div class="card news-card">
                        <img src="img/portada/Imagen_cultura.png" class="card-img-top" alt="Noticia 6">
                        <div class="card-body">
                            <h5 class="card-title">CULTURA</h5>
                            <p class="card-text">¡Machu Picchu triunfa! Perú brilal en los World Travel Awards 2024</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="mvc/vista/menu/economia.php" class="text-decoration-none">
                    <div class="card news-card">
                        <img src="img/portada/Imagen_economia.png" class="card-img-top" alt="Noticia 7">
                        <div class="card-body">
                            <h5 class="card-title">ECONOMIA</h5>
                            <p class="card-text">La cumbre APEC en Lima - Perú 2024</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </main>

    <!-- Pie de Página -->
    <footer class="bg-dark text-white text-center p-3">
        <p>&copy; 2024 Dilo fuerte Autónomo. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>