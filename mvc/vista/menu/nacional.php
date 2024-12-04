<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacional</title>
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

    <div id="newsCarousel" class="carousel slide my-4" data-bs-ride="false">
        <!-- Contenido del Carousel -->
        <div class="carousel-inner">
            <!-- Noticia 1 -->
            <div class="carousel-item active">
                <div class="container">
                    <h2 class="text-center fw-bold">El Paro de Transportistas</h2>
                    <p class="text-center text-muted">Una Señal de la Inseguridad Ignorada</p>
                    <div class="row">
                        <!-- Imagen destacada -->
                        <div class="col-md-6">
                            <img src="../../../img/noticias/nacional/nacional_01.png" class="d-block w-100 rounded" alt="Noticia 1">
                            <figcaption class="mt-2 text-muted">Fuente: La República</figcaption>
                        </div>
                        <!-- Contenido de la noticia -->
                        <div class="col-md-6">
                            <p>
                                Estado de emergencia y caos en 14 distritos de Lima Metropolitana y Callao revelan una grave crisis en el transporte público. Más de 60 empresas de transporte han sido atacadas, y se reportan amenazas y atentados hacia cobradores, chóferes y pasajeros. Esto evidencia una falta de control por parte del gobierno sobre el problema de fondo. Las medidas actuales son solo temporales y no abordan la inseguridad y falta de protección en el sector.
                                La situación se agravó cuando los transportistas decidieron detener sus actividades debido a la inseguridad y la falta de medidas efectivas de protección. Este paro, que afectó gravemente la movilidad en la ciudad, reflejó la desesperación del sector ante una situación que había llegado a un punto crítico. Aunque el gobierno logró un acuerdo temporal para calmar el conflicto, la crisis persiste y la solución sigue siendo insostenible a largo plazo.
                            </p>
                            <a href="#" class="btn btn-primary mt-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Noticia 2 -->
            <div class="carousel-item">
                <div class="container">
                    <h2 class="text-center fw-bold">Escándalo en el Programa Qali Warma</h2>
                    <p class="text-center text-muted">Renuncia, amenazas y Denuncias de Corrupción</p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../../../img/noticias/nacional/nacional_02.png" class="d-block w-100 rounded" alt="Noticia 2">
                            <figcaption class="mt-2 text-muted">Fuente: La República</figcaption>
                        </div>
                        <div class="col-md-6">
                            <p>
                                En medio de una creciente polémica, Pedro Ripalda ha renunciado al cargo de director ejecutivo del Programa Nacional de Alimentación Escolar Qali Warma, lamentando que “una empresa inescrupulosa haya atentado contra los niños del Perú". Su salida se produce tras la revelación de un nuevo escándalo que involucra a un proveedor del programa, la empresa Frigoinca.
                                Coimas y mala calidad de alimentos:
                                El programa Punto Final ha revelado que la empresa Frigoinca, proveedora de alimentos para Qali Warma, habría pagado coimas a funcionarios para encubrir la mala calidad de los productos. Este escándalo se centra en un colegio de Cabana, uno de los distritos más pobres del país, donde se distribuyeron conservas de pollo, carne y cerdo bajo la marca Don Simón. Revelaciones de una extrabajadora:
                                Noemí Alvarado Llanos, extrabajadora de Frigoinca, ha decidido hablar a pesar de las amenazas que ha recibido. En una entrevista con el programa "Cuarto Poder", expuso cómo se pagaban coimas a trabajadores para ocultar el mal estado de los alimentos distribuidos.
                            </p>
                            <a href="#" class="btn btn-primary mt-3">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
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