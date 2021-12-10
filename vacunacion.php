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

    <title>vacunacion</title>
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
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">Noticias</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active" href="culturales.php">Culturales</a></li>
                                <li><a class="dropdown-item" href="Regionales.php">Regionales</a></li>
                            </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                ITSPereira
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="historia.php">Historia</a></li>
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
                        Vacunación en Pereira
                    </h1>
                    <img src="vacunacion.png" width="100%" class="mt-1 mb-3">
                    <p align="justify">1.200 millones debe el Gobierno a la ESE Salud Pereira por vacunación.
                        Desde la entidad piden que esa cartera sea pagada rápidamente para no poner en riesgo el proceso de inmunización en la ciudad
                        <br>
                        <br>
                        Esta deuda del Gobierno Nacional con la ESE Salud Pereira asciende a los 1.200 millones de pesos que, aunque están comprometidos a pagar, aún no han desembolsado tras ocho meses de iniciado el proceso de vacunación por parte de esta entidad. Pese a la falta de recursos que han enfrentado, la aplicación de biológicos no se ha detenido, por el contrario, ha tenido una importante cobertura en zonas urbanas y rurales de la ciudad y grupos poblacionales como migrantes, adultos mayores y población carcelaria, completando más de 151 mil personas vacunadas entre primeras y segundas dosis.
                        <br>
                        <br>
                        Según expresó Jorge Iván Duque, gerente de la ESE Salud Pereira, se espera que en los próximos días, el Gobierno Nacional realice el giro de al menos mil millones de pesos para subsanar las dificultades presupuestales de la entidad y continuar con el ritmo de vacunación que hasta ahora lleva. El desembolso de este dinero es importante para continuar con las jornadas de vacunación en zonas rurales de la capital risaraldense, realizar la contratación de personal médico y adquisición de equipos necesarios para el proceso.
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