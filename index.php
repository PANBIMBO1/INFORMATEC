<!doctype html>
<html lang="es">
  <head>
    <!--Logo al lado del titulo (pestaña) -->
    <link rel="shortcut icon" href="logo.png"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Pagina Principal</title>
  </head>
  <body>
    <!-- Banner -->
<div class="container-fluid">
    <img src="banner.png" width="100%"class="img-fluid">
    <br>
     </div>

   
      <!-- Navbar-->
      <div class="container-fluid">
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
                            <li class="nav-item"><a href="index.php" class="nav-link active">Principal</a></li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Noticias</a>
                            
                             <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="culturales.php">Culturales</a></li>
                          <li><a class="dropdown-item" href="regionales.php">Regionales</a></li>
                        </ul>
                        </li>
                         

                             <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                          ITSPereira
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="historia.php">Historia</a></li>
                          <li><a class="dropdown-item" href="eventos.php">Eventos</a></li>
                          <li><a class="dropdown-item" href="especialidades.php">Especialidades</a></li>
                        </ul>
                        </li>
                        
                             <li class="nav-item"><a href="acercade.php" class="nav-link">Acerca de</a></li>
                            </ul>
                        



                        </div>
               
            </div>
      </nav>
  </div>

<br>


<!-- carrusel -->
<div class="col-sm-3" >
</div>
<div class="col-sm-6 mx-auto">
<div class="container-sm">
 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="carrusel1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="carrusel3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="carrusel2.png " class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div>
</div>
</div>
<div class="col-sm-3">
</div>
</div>

<!-- cartas -->
<br>
<br>

<div class="card-group">
  <div class="card">
    <a href="transporte.php"><img src="transporte.png" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">¿Como funciona el megacable?</h5>
      <p class="card-text">Desde el pasado lunes 20 de septiembre inició el funcionamiento de las cuatro estaciones que hacen parte de esta línea del Megacable. Haz click para ver mas.</p>
    </div>
  </div>
  <div class="card">
    <a href="turismo.php"><img src="turismo.png" class="card-img-top" ></a>
    <div class="card-body">
      <h5 class="card-title">Turismo</h5>
      <p class="card-text">En el proceso de reactivar la economía, el departamento ha demostrado un importante avance en la reapertura del turismo, llegando incluso a superar las cifras de reactivación reportadas a nivel nacional.Haz click para ver mas.</p>
    </div>
  </div>
  <div class="card">
    <a href="colegio.php"><img src="historia.png" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Historia del colegio</h5>
      <p class="card-text">Ven y conoce la historia de nuestra institucion a lo largo de sus 78 años. Haz click aqui para ver mas.</p>
    </div>
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
  </body>
</html>