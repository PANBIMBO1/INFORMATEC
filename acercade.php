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

    <title>ACERCA DE</title>
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
                              <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">Noticias</a>
                            
                             <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="culturales.php">Culturales</a></li>
                          <li><a class="dropdown-item" href="Regionales.php">Regionales</a></li>
                        </ul>
                         

                             <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown">
                          ITSPereira
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="historia.php">Historia</a></li>
                          <li><a class="dropdown-item" href="eventos.php">Eventos</a></li>
                          <li><a class="dropdown-item" href="especialidades.php">Especialidades</a></li>
                        </ul>
                        
                             <li class="nav-item"><a href="acercade.php" class="nav-link active">Acerca de</a></li>
                            </ul>
                        



                        </div>
               
            </div>
      </nav>
  </div>
  <br>
  <div class="row">
    <!--espacio en blanco-->
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
         <h1 align="center">
        ¿QUIENES SOMOS?
    </h1>
        <hr style="height: 5px;">
      </div>
      <!--espacio en blanco-->
      <div class="col-md-4">

      </div>
    </div>

     <div class="row">
    <!--espacio en blanco-->
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
         <img src="grupo.jpg"  width="100%" class="mt-1 mb-3">
      </div>
      <!--espacio en blanco-->
      <div class="col-md-2">

      </div>
    </div>

    <div class="row">
      <div class="col-md-2">
        
      </div>
      <div class="col-md-3">
        <h4 align="center">Cluadia Patricia Galvis</h4>
        <p align="center">
          Diseñadora y programadora.
        </p>
        <hr style="height: 3px;">
        
      </div>
      <div class="col-md-2">
        
      </div>
      <div class="col-md-3">
        <h4 align="center">Angellina Castaño</h4>
        <p align="center">
          Busqueda de información.
          <hr style="height: 3px;"></p>
      </div>
      <div class="col-md-2">
        
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-2">
        
      </div>
      <div class="col-md-3">
        <h4 align="center">Juan Sebastian Alvarez</h4>
        <p align="center">
          Programador.
        </p>
        <hr style="height: 3px;">
        
      </div>
      <div class="col-md-2">
        
      </div>
      <div class="col-md-3">
        <h4 align="center">Juan David López</h4>
        <p align="center">
          Programador y diseñador.</p>
          <hr style="height: 3px;">
      </div>
      <div class="col-md-2">
    </div>
 
    

    
    <br>
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