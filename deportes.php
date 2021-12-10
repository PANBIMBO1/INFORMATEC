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

    <title>Deportes</title>
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
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">Noticias</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item " href="culturales.php">Culturales</a></li>
                                <li><a class="dropdown-item" href="Regionales.php">Regionales</a></li>
                            </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
                                ITSPereira
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="historia.php">Historia</a></li>
                                <li><a class="dropdown-item active" href="eventos.php">Eventos</a></li>
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
                        Deportes
                    </h1>
                    <img src="deportes.png" width="100%" class="mt-1 mb-3">
                    <p align="justify">
                        El lunes 9 de septiembre el Instituto Técnico Superior de Pereira celebró el Día del Deporte Pereirano, iniciativa que nació por el Acuerdo 48 de 2016 del Concejo Municipal, el cual invita a la Administración Municipal a desarrollar actividades que reconozcan el aporte del deporte a la construcción de ciudad y de ciudadanía.
                        <br>
                        <br>
                        Con el direccionamiento y acompañamiento de distintas Secretarías como la Secretaría Municipal de Deportes y Recreación y la Secretaría Municipal de Educación, se realizó una jornada escolar deportiva en toda la Institución, la cual vinculó a Estudiantes, Docentes, Directivos y en general a la comunidad educativa, mediante actividades deportivas como voleibol, baloncesto, banquitas, microfútbol, futbol, baile, atletismo, ajedrez, juegos de mesa y futbol en cancha sintética, dirigidas especialmente a los NNA de la Institución.
                        <br>
                        <br>
                        Tal y como lo dijo el Secretario Municipal de Deporte y Recreación, “Será una gran fiesta deportiva”, fue lo que se vivió en la Institución, de la misma manera en parques y escenarios deportivos de la Ciudad en donde se realizaron distintas actividades como juegos tradicionales: inflables, jerbi, cien pies, golosa, pañuelo robado, chicle americano, juego de sapo, baloncesto, yoga, voleibol playa, futbol, entro muchos otros.
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