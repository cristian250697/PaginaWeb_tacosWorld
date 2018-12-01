<!DOCTYPE HTML>
<html lang="en">
  <head>
       <!------------- MAPA------->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS --> <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
  
   <link rel="stylesheet" href="../../PaginaWeb_tacosWorld/css/estilo.css">
    <!--------------- MAPA------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        $nth-nav-item-that-needs-margin-right     : 2;
        $width-of-navbar-brand-or-logo-in-px      : 160px;
        $padding-x-for-navbar-brand-or-logo-in-px : 16px;

    @media (min-width: 768px) {
	
        .position-md-absolute {
            position: absolute;
        }
        .navbar-nav .nav-item:nth-child(#{$nth-nav-item-that-needs-margin-right}) {
            margin-right: $width-of-navbar-brand-or-logo-in-px + ($padding-x-for-navbar-brand-or-logo-in-px * 2);
        }
    
    }
        
        #secciones{
            color: red;
            font-weight: bold;
        }
         #secciones-s{
            color: white;
            font-weight: bold;
        }
        
        .carousel-inner img {
          width: 100%;
          height: 70%;
        }
        
        div#tacos{
            width: 70%;
            margin:0px auto;
        }
        
        a#secciones{
            width: 250px;
        }
        
        a img#logo{
            display: block;
            width: 25%;
            margin: auto;        
            
        }
        
        div#h1{
            text-align: center;
            
        }
      </style>

    <title>Nueva Orden - TacosWorld</title>
  </head>
  <body>
   <!-------------------------------------------------------------- BARRA DE NAVEGACIÓN ------------------------------------------------------------------->
    <nav class="navbar navbar-expand-md flex-column navbar-inverse scrolling-navbar fixed-top bg-light" style="background-color: transparent;">
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="../index.php">
           <img id= "logo" src="../images/logo.png" alt="tacosWorld"></a>
            <button style="background-color: red;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         
         <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
              <ul class="navbar-nav text-center" >
               <li style="background-color: red;" class="nav-item active"><a id = "secciones-s"  class="nav-link" href="../establishments/establishment.php">Taquerias</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="../establishments/promotions.php">Promociones</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="../nosotros.php">Nosotros</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="../ARMATUTACO.html">Arma  tu taco</a>
               </li>
              </ul>
         </div>
    </nav>
    
   <!---------------------------------------------------------FORMULARIO---------------------------------------------------------------------------------->
   <br><br><br><br><br><br><br>
   <div id="h1">
    <h1 class="h1 justify-content-md-center">Bienvenido al portal tacosWorld</h1>
    <h6 class=h6>Taquerias asociadas</h6>
   </div>
   <br>
   
   <center>
   <div id="taqueria" class="shadow p-3 mb-5 bg-white rounded justify-content-md-between" style="background-color: #F2F2F2; width: 70%;">
   <div class="row justify-content-around">
     
     <div class="col-6 justify-content-md-center" style="height: 100%">
        <label for="" class="h4">Imagen de la taqueria</label>
         <img src="../../images/imagesTacos/tacos1.jpg" alt="" width="100%" height="90%">
     </div>
       <div class="col-6 justify-content-md-center">
        <label for="" class="h4">Información</label>
         <div class="col-12">
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Nombre de la taqueria:
                </div>
                <div class="col-9" style="text-align: left;">
                    Aqui va el nombre la taqueria obtenida por la BD
                </div>
             </div>
             <div class="row mb-3 justify-content-md-between">
                <div class="col-3 p-0" style="text-align: left;">
                    Descripción: 
                </div>
                <div class="col-9" style="text-align: left;">
                    Aqui va toda la descripción de la taqueria obtenida por la BD
                </div>
             </div>
             
             
         </div>
       </div>
    
    </div>
    <br>
   <button class="btn btn-danger">Mas Información</button>
   
   
   
   </div>
   <div id="taqueria" class="shadow p-3 mb-5 bg-white rounded justify-content-md-between" style="background-color: #F2F2F2; width: 70%;">
   <div class="row justify-content-around">
     
     <div class="col-6 justify-content-md-center" style="height: 100%">
        <label for="" class="h4">Imagen de la taqueria</label>
         <img src="../../images/imagesTacos/tacos1.jpg" alt="" width="100%" height="90%">
     </div>
       <div class="col-6 justify-content-md-center">
        <label for="" class="h4">Información</label>
         <div class="col-12">
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Nombre de la taqueria:
                </div>
                <div class="col-9" style="text-align: left;">
                    Aqui va el nombre la taqueria obtenida por la BD
                </div>
             </div>
             <div class="row mb-3 justify-content-md-between">
                <div class="col-3 p-0" style="text-align: left;">
                    Descripción: 
                </div>
                <div class="col-9" style="text-align: left;">
                    Aqui va toda la descripción de la taqueria obtenida por la BD
                </div>
             </div>             
             
         </div>
       </div>
    
    </div>
    <br>
   <button class="btn btn-danger">Mas información</button>
   </div>
   
   
   </center>
   
   <!------------------------------------------------------------------------------------------------------------------------------------------------>
   
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
  
  
   <!------------------------------------------------------FOOTER ---------------------------------------------------------------->
 <footer class="page-footer font-small blue pt-4" style=" background-color: #454545">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-5 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase" style="color: white;">Cerca de tí</h5>
           <div id="mapaFooter"  style="width: 90%; height: 290px; display: block;"></div>
    <?php include_once("../PHP/locations.php");?> 
     <script src="../js/mapaFooter.js"></script> <!-- se cargan todos los componentes del mapaFooter.js (incluyendo funciones y variables) -->
      <script>
           var ar = new Array(<?php echo json_encode($datos);  ?>);
          var i;
          for(i = 0; i< ar[0].length;i++){
          var pos = "";
          pos += ar[0][i];
          var prueba = pos.split(',',3);
          
         marcador = L.marker([prueba[1],prueba[0]]).addTo(mapaFooter);
                marcador.bindPopup(prueba[2]).openPopup();
           //L.geoJSON(ar).addTo(mapaFooter);
          }
      </script>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-2 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase"  style="color: white;">Temas de interés</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Arma tu taco</a>
              </li>
              <li>
                <a href="#!">Taquerías</a>
              </li>
              <li>
                <a href="#!">Promociones</a>
              </li>
              <li>
                <a href="#!">Nosotros</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase"  style="color: white;">Nuestras redes Sociales</h5>
            

            <ul class="list-unstyled">
              <li>
                <a href="#!">Facebbok</a>
              </li>
              <li>
                <a href="#!">Twitter</a>
              </li>
              <li>
                <a href="#!">Instagram</a>
              </li>
              <li>
                <a href="#!">Youtube</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->
           <!-- Grid column -->
          <div class="col-md-1 mb-md-0 mb-2">

            <!-- Links -->
            <h5 class="text-uppercase"  style="color: white;">Socios</h5>
            

            <ul class="list-unstyled">
              <li>
                <a href="#!">Registrarse</a>
              </li>
              <li>
                <a href="#!">Iniciar Sesión</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->
          
           <!-- Grid column -->
          <div class="col-md-1 mb-md-0 mb-2">

            <!-- Links -->
            <h5 class="text-uppercase"  style="color: white;">Usuarios</h5>
            

            <ul class="list-unstyled">
              <li>
                <a href="#!">Registrarse</a>
              </li>
              <li>
                <a href="#!">Iniciar Sesión</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 " style="background-color: #2E2E2E; color: white">© 2018 Copyright:
      <p> TacosWorldMexico.com</p>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  
  
</html>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>