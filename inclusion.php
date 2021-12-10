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

    <title>Inclusión</title>
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
                                <li><a class="dropdown-item " href="culturales.php">Culturales</a></li>
                                <li><a class="dropdown-item active" href="Regionales.php">Regionales</a></li>
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
                        Inclusion en la región
                    </h1>
                    <img src="inclusion.png" width="100%" class="mt-1 mb-3">
                    <p align="justify">Recientemente se han adelantado distintos proyectos para la inclusión de la comunidad sorda de Santa Rosa.
                        <br> En Santa Rosa se han adelantado programas inclusivos para personas con condiciones especiales dentro del municipio. Una muestra de ello es la Casa de la Inclusión, un espacio creado con la intención de brindar atención integral a discapacitados y sus cuidadores a través de la educación en arte, música, danza, atención psicológica y fisioterapia.
                        Además de la Casa de la Inclusión, otra de las iniciativas que se ha gestado en el municipio es el Café Incluyente Don Fermín, el cual fue inaugurado el 13 de enero y está ubicado en el Parque Los Fundadores de Santa Rosa. Allí, los clientes son atendidos por personal sordo, y reciben el menú con indicaciones especiales para ordenar en lengua de señas.
                        <br>
                        <br>Esta cafetería al aire libre creada por la Alcaldía tiene como objetivo principal dar una oportunidad laboral a la comunidad sorda, además de reducir las barreras de comunicación, ya que los visitantes aprenden un poco de la lengua de señas y se concientizan sobre la importancia de estos espacios.
                        <br>Cristhian Jiménez pertenece a la comunidad sorda, y es barista en Don Fermín Café Incluyente, junto a tres compañeros más. El trabajador destaca que este proyecto lo llena de felicidad debido a que es una buena oportunidad laboral en la se puede compartir con muchas personas que tienen la voluntad de probar un gran café, mientras aprenden algunos gestos de lengua de señas, logrando que la comunidad se acerque entre sí.
                        Otro de los partícipes de esta iniciativa es Jhon Giraldo, intérprete de lengua de señas de la Alcaldía de Santa Rosa y MinTic, quien resalta que la creación de espacios como Café Incluyente Don Fermín es necesaria para que las personas conozcan la importancia de las labores de la comunidad sorda, que día a día lucha por acabar con la discriminación que los persigue. Además, menciona que aprender lengua de señas es una manera de conocer el mundo desde otra perspectiva.
                        <br>
                        <br>En Santa Rosa se espera seguir trabajando por la inclusión de las distintas comunidades al brindarles empleo y espacio que los visibilice, además de eliminar la discriminación que sufren las personas sordas en el municipio santarosano.
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