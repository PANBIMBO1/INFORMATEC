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

    <title>Metalmecánica</title>
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
                                <li><a class="dropdown-item" href="culturales.php">Culturales</a></li>
                                <li><a class="dropdown-item" href="Regionales.php">Regionales</a></li>
                            </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
                                ITSPereira
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="historia.php">Historia</a></li>
                                <li><a class="dropdown-item" href="eventos.php">Eventos</a></li>
                                <li><a class="dropdown-item active" href="especialidades.php">Especialidades</a></li>
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
                        Metalmecánica
                    </h1>
                    <img src="metalmecanica.png" width="100%" class="mt-1 mb-3">
                    <p align="justify">
                        La Metalmecánica constituye uno de los recursos tecnológicos fundamentales en el mundo moderno. Las industrias de transportes, la aeroespacial y la electrónica, han alcanzado su grado de desarrollo actual gracias a las modernas técnicas de soldadura y hoy prácticamente no existen empresa tecnológica alguna en la que las mismas no intervengan en una de sus etapas.
                    </p>
                    <p align="justify">
                        El efecto, la tecnología de la soldadura, necesita cada vez más aporte de distintas vertientes del conocimiento científico; electrónica, metalurgias, física, fisicoquímica, sistemas de control, métodos numéricos, entre otros. Todo ello contribuye a hacer de esta una actividad multidisciplinaria. Su uso exige buenos conocimientos técnicos y por lo tanto, estos trabajos deben ser ejecutados por personas que conozcan bien los procesos, sepan manejar los equipos en forma adecuada y estén en condiciones de evitar daños a la salud, provocados por los factores de riesgos propios de la actividad
                    </p>
                    <br>
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