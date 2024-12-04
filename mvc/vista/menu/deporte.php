<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes</title>
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
                    <h2 class="text-center fw-bold">II Torneo Deportivo de la Carrera de Ciencias de la Comunicación</h2>
                    <p class="text-center text-muted">Universidad Autonoma del Perú</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/deportes/deportes_01.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: Escuela de Ciencias de Comunición de la Universidad Autónoma del Perú</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                El II Torneo Deportivo de la Carrera de Ciencias de la Comunicación se llevó a cabo con gran entusiasmo, incluyendo competiciones de vóley mixto y fútbol masculino, iniciando a las 10 a.m. Durante el evento, se generó una considerable conmoción entre el público, con quejas sobre el desempeño de los jugadores y del arbitraje, lo que resultó en decisiones controvertidas, como penales cuestionables y la descalificación de equipos en vóley.
                                La falta de coordinación se hizo evidente cuando, tras enfrentar a los equipos A y C, y B y D, el equipo D se encontró compitiendo contra el peor clasificado, lo que ocasionó más conflictos por la gestión del torneo. Finalmente, el equipo B, del cuarto ciclo, se coronó campeón de fútbol.
                                En la categoría de vóley, los equipos de cuarto y quinto ciclo avanzaron a las finales, resultando ganador el cuarto ciclo. En fútbol, el equipo C de décimo ciclo venció al equipo A y se enfrentó en la final contra el cuarto ciclo. Este último, con un partido intenso lleno de disputas sobre el arbitraje, terminó ganando 2-1. A pesar de la tensión, la directora intervino para resolver los problemas temporales, lo que permitió que el partido culminara sin más inconvenientes.
                            </p>
                            <a href="#" class="btn btn-primary mt-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Noticia 2 -->
            <div class="carousel-item">
                <div class="container">
                    <h2 class="text-center fw-bold">Universitario de Deportes celebra su centenario con el bicampeonato nacional de la Liga 1 2024</h2>
                    <p class="text-center text-muted">Futbol peruano</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/deportes/deportes_02.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: Club Universitario de Deportes</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                El club Universitario de Deportes ha marcado un capítulo histórico al coronarse bicampeón nacional en el año de su centenario, un logro que resalta la grandeza y tradición de la institución. Fundado en 1924, el equipo ha sido un símbolo del fútbol peruano y, en su aniversario número 100, reafirma su lugar como uno de los clubes más exitosos del país.
                                La obtención del título del Torneo Clausura y, con ello, del campeonato nacional 2024, ha sido el broche de oro para un año lleno de celebraciones y reconocimientos. Este logro no solo consolida su posición en la historia del fútbol peruano, sino que también fortalece el vínculo con su fiel hinchada, que ha sido parte fundamental del éxito del club en sus 100 años de historia.
                                Con eventos conmemorativos, homenajes a figuras legendarias y un año cargado de éxitos deportivos, Universitario cierra su centenario reafirmando su lema:
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