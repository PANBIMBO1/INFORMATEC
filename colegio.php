<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="logo.png" />
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Historia del colegio</title>
</head>

<body style="background-color: #edeeef;">
    <div class="container-fluid">
        <!-- Banner -->
        <img src="banner.png" width="100%" class="img-fluid">
    </div>

    <!-- Navbar -->
    <div class="container-fluid">
        <!-- BARRA NAVEGACIÓN -->
        <nav class="navbar navbar-expand-md navbar-light mb-3" style="background-color: #A9E1A0;">
            <div class="container-fluid ">
                <div class="col-md-4"><a href="index.php" class="navbar-brand"><img src="logo.png" width="30" height=" 30"> INFORMATEC </a></div>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuNavegacion">
                    <span class="navbar-toggler-icon"></span></button>
                <div id="menuNavegacion" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item"><a href="index.php" class="nav-link ">Principal</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Noticias</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="culturales.php">Culturales</a></li>
                                <li><a class="dropdown-item" href="Regionales.php">Regionales</a></li>
                            </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
                                ITSPereira
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active " href="historia.php">Historia</a></li>
                                <li><a class="dropdown-item" href="eventos.php">Eventos</a></li>
                                <li><a class="dropdown-item" href="especialidades.php">Especialidades</a></li>
                            </ul>
                        <li class="nav-item"><a href="acercade.php" class="nav-link">Acerca de</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <br>

        <!-- News -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1">
                    <!--Blanco-->
                </div>
                <div class="col-sm-7">

                    <h1 align="center" class="mb-3">
                        Historia de nuestro colegio
                    </h1>
                    <img src="historia.png" width="100%" class="mt-1 mb-3">
                    <p align="justify">
                        Mediante el Acuerdo 01 de Enero de 1943 del Conceso Municipal de Pereira, la Nación, el Departamento de Caldas y el Municipio de Pereira establecieron las bases económicas y administrativas para el funcionamiento de una escuela de ARTES Y OFICIOS.
                        <br>
                        <br>
                        El término de duración del contrato fue de diez años y para su validez debió aprobarlo el Señor Presidente de la República, previo concepto favorable del Consejo de Ministros y posterior aprobación del Consejo de Estado.
                        <br>El colegio inició labores en el mes de marzo de 1943 con 100 estudiantes distribuidos en tres cursos. Otorgó grados a los primeros 16 expertos en el año de 1947.
                        <br>
                        <br>
                        Por medio del Decreto 1890 del 7 de septiembre de 1951, en el gobierno del presidente LAUREANO GÓMEZ, el Instituto fue elevado a la categoría de INSTITUTO TÉCNICO SUPERIOR.
                        Hasta el año de 1960 expidió el título de EXPERTO. En noviembre de 1961 graduó los primeros BACHILLERES TECNICOS.
                        <br>En abril de 1964 se creó la jornada nocturna, modalidad académica con los profesores de la jornada diurna y con el mismo cuerpo directivo y administrativo.
                        <br>
                        <br>
                        El colegio inicio labores en el inmueble ubicado en la calle 21 con carrera 13. En 1971 se trasladó parcialmente a las instalaciones que ocupa hoy día. En el año 1974 operó el traslado de todos los grupos y la parte administrativa. El edificio lo construyó el ICCE en un lote donado por el Municipio de acuerdo con la escritura pública No.651 del 3 de abril de 1961, de la notaría tercera de Pereira. Sus estudios han sido aprobados según las Resoluciones 5871 de 1961, 20304 de 1980, 325 de 1991 expedidas por el Ministerio de Educación Nacional y la Resolución 456 de Octubre 14 de 2004 expedida por la Secretaría de Educación Municipal.
                    </p>
                </div>
                <div class="col-sm-1">
                    <!--Blanco-->
                </div>
                <div class="col-sm-3">
                    <!-- Columna de trabajo -->
                    <br><br>
                    <p class="text-secondary text-center">Noticia Publicitaria:</p>
                    <hr>
                    <picture>
                        <source srcset="https://archiv.kompasslev.cz/ahorra-ya.co/public/gimg/1/5/9/3/2/5/159325-1200-100000.jpg" type="image/svg+xml">
                        <img src="https://archiv.kompasslev.cz/ahorra-ya.co/public/gimg/1/5/9/3/2/5/159325-1200-100000.jpg" class="img-fluid img-thumbnail" alt="...">
                    </picture>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small mt-3">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© <?php echo date('Y') . " Copyright INFORMATEC- Especialidad Informática"; ?>
                <br>
                <a class="text-primary" href="https://tecnologiasits.pindana.co/">Diseño y Desarrollo de Sitios Web - <a class="text-primary" href="https://itspereira.edu.co/"> Instituto Técnico Superior de Pereira</a>
                    <br>Pereira - Colombia
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    </div>
    </div>
</body>

</html>