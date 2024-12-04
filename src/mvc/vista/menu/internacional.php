<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internacional</title>
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
            <div id="item1" class="carousel-item active">
                <div class="container">
                    <h2 class="text-center fw-bold">LEY MARCIAL EN COREA DEL SUR</h2>
                    <p class="text-center text-muted">Militares invaden las calles del país</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/internacional/internacional_01.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: CNN</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                Resolución unánime en la Asamblea Nacional:
                                La Asamblea Nacional de Corea del Sur aprobó por unanimidad una resolución para derogar la ley marcial impuesta por el presidente Yoon Seok-yeol. Con 190 votos a favor de 190 diputados presentes, la medida recibió respaldo tanto de la coalición gobernante como de la oposición, mostrando un fuerte rechazo a la medida de Yoon.
                                Desafío constitucional para la administración de Yoon:
                                La ley marcial había sido decretada en un contexto de crisis política y polarización. Sin embargo, la Constitución de Corea del Sur establece que el presidente debe anular la ley si la Asamblea lo solicita con mayoría, lo que representa un importante desafío y un golpe a la administración de Yoon.
                                Declaración oficial de la asamblea: fin de la Ley Marcial:
                                El presidente de la Asamblea, Woo Won-sik, afirmó que, según la resolución, la ley marcial ya no es válida y debe levantarse de inmediato. Esta declaración marca un momento decisivo para la restauración del orden democrático y el retorno a la estabilidad política.
                            </p>
                            <a href="#" class="btn btn-primary mt-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Noticia 2 -->
            <div id="item2" class="carousel-item">
                <div class="container">
                    <h2 class="text-center fw-bold">La Sorpresa Electoral</h2>
                    <p class="text-center text-muted">Trump Recupera el Poder en EE.UU</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/internacional/internacional_02.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: The Associated Press</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                El presidente Donald Trump ha logrado una victoria significativa en las recientes elecciones estadounidenses, marcando un regreso impactante al poder en un contexto político polarizado.
                                En las elecciones más recientes de Estados Unidos, Donald Trump ha sido declarado el ganador, sorprendiendo a muchos analistas y votantes. Con una campaña centrada en la economía, la inmigración y la seguridad nacional, Trump logró movilizar a una base amplia de seguidores que se sintieron atraídos por su mensaje directo y promesas de cambio.
                                Estado de emergencia y caos en 14 distritos de Lima Metropolitana y Callao revelan una grave crisis en el transporte público. Más de 60 empresas de transporte han sido atacadas, y se reportan amenazas y atentados hacia cobradores, chóferes y pasajeros. Esto evidencia una falta de control por parte del gobierno sobre el problema de fondo. Las medidas actuales son solo temporales y no abordan la inseguridad y falta de protección en el sector.
                                La situación se agravó cuando los transportistas decidieron detener sus actividades debido a la inseguridad y la falta de medidas efectivas de protección.
                            </p>
                            <a href="#" class="btn btn-primary mt-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Noticia 3 -->
            <div id="item3" class="carousel-item">
                <div class="container">
                    <h2 class="text-center fw-bold">Perú Refuerza el Control Fronterizo ante la Crisis Migratoria y la Situación en Bolivia</h2>
                    <p class="text-center text-muted">Situación en Bolivia</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/internacional/internacional_03.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: Infobae</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                Operativos de control en la frontera con Bolivia:
                                La Policía Nacional del Perú (PNP) ha intensificado los operativos en la frontera con Bolivia, especialmente en la zona de Desaguadero. Esta estrategia busca mejorar la seguridad y el control migratorio ante el aumento en el tráfico de personas y el contrabando, problemáticas que afectan tanto a Perú como a la región.
                                Refuerzo de la cooperación binacional y sensibilidad migratoria:
                                Las autoridades peruanas, en colaboración con la Policía Boliviana, han establecido controles en puntos clave para enfrentar el tráfico ilegal. Además, se prioriza la sensibilidad hacia los migrantes en situaciones vulnerables, asegurando el cumplimiento de las leyes migratorias.
                                Detenciones y expulsiones:
                                El medio regional Sin Fronteras informó que agentes de la comisaría de Ichu arrestaron a tres personas sin la documentación necesaria para ingresar a territorio peruano. Los detenidos fueron identificados como Juan Pablo Ruiz Aro, Johan Fernando López Castro y Nicol Olida Olguín.
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener el índice de la diapositiva desde el parámetro de la URL
            const params = new URLSearchParams(window.location.search);
            const slideIndex = params.get('slide');

            // Verificar si el parámetro `slide` está presente
            if (slideIndex !== null) {
                const carousel = new bootstrap.Carousel('#newsCarousel3');
                carousel.to(parseInt(slideIndex, 10) - 1); // Ajustar índice (slide=1 muestra la primera)
            }
        });
    </script>


    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>