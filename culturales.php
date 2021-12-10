<!doctype html>
<html lang="es">
  <head>
    <!--Logo al lado del titulo (pestaña) -->
    <link rel="shortcut icon" href="logo.png"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Noticias culturales</title>
  </head>
  <body>
   <div class="container-fluid">
    <!-- BARRA NAVEGACIÓN -->
     <nav class="navbar navbar-expand-md navbar-light" style="background-color: #A9E1A0;">  
            <div class="container-fluid ">
                <div class="col-md-4" ><a href="index.php" class="navbar-brand"><img src="logo.png" width="30" height=" 30"> INFORMATEC </a></div>
                
                <button type="button"
                    class="navbar-toggler"
                    data-bs-toggle="collapse"
                    data-bs-target="#menuNavegacion"> 
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
  </div>
  <br>
  <h1 align="center">
        NOTICIAS CULTURALES
    </h1>
    <br>

    <!-- Cards -->
    <div class="container-fluid">
        <div class="row">
                <div class="col-sm-1">
                    
                </div>
                  <div class="col-sm-5">
                    <div class="card">
                        <img src="transporte.png" class="card-img-top" >
                      <div class="card-body">
                        <h5 class="card-title">¿Como funciona el megacable?</h5>
                        <p class="card-text">Desde el pasado lunes 20 de septiembre inició el funcionamiento de las cuatro estaciones que hacen parte de esta línea del Megacable. </p>
                        <a href="transporte.php" class="btn btn-primary">Haz click para ver mas</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="card">
                        <img src="vacunacion.png" class="card-img-top" >
                      <div class="card-body">
                        <h5 class="card-title">Vacunación</h5>
                        <p class="card-text">El gobierno debe 1.200 millones a la ESE Salud Pereira debido a que no coloco un proceso de inmunización en la ciudad. La ESE salud pereira pide que la cartera sea pagada rapidamente.</p>
                        <a href="vacunacion.php" class="btn btn-primary">Haz click para ver mas</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-1"></div>
        </div>
        <br>
        <div class="row">
                <div class="col-sm-3">
                    
                </div>
                <div class="col-sm-6">
                    <p class="text-secondary text-center">Noticia Publicitaria:</p>
                <hr>
                <p align="center"><img src="http://www.cenem.cl/sitio-old/newsletter/agosto2013/images/noticias/not16_01.jpg" ></p>
                    
                </div>
                <div class="col-sm-3">
                    
                </div>
    </div>
    <footer class="page-footer font-small">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© <?php echo date('Y') . " Copyright INFORMATEC- Especialidad Informática"; ?>
            <br>
            <a class="text-primary" href="https://tecnologiasits.pindana.co/">Diseño y Desarrollo de Sitios Web - <a class="text-primary" href="https://itspereira.edu.co/"> Instituto Técnico Superior de Pereira</a>
                <br>Pereira - Colombia
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>