<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!------------- MAPA------->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS --> <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
  
   <link rel="stylesheet" href="../PaginaWeb_tacosWorld/css/estilo.css">
    <!--------------- MAPA------->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
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

        
        a#secciones{
            width: 250px;
        }
        
        a#promocion{
            width: 250px;
            color: red;
            font-weight: bold;
        }
        
        a#promocion:hover{
            background-color: orange;
            width: 250px;
            color: white;
            font-weight: bold;
        }
        
        a img#logo{
            display: block;
            width: 40%;
            margin: auto;        
            
        }
        
        .carousel-inner img {
        height: 100%;
        max-width: 100%;
        display: block;
        margin: auto;
  }
        
      </style>

    <title>Bienvenido - TacosWorld</title>
  </head>
  <body>
   <!-------------------------------------------------------------- BARRA DE NAVEGACIÓN ------------------------------------------------------------------->
    <nav class="navbar navbar-expand-md flex-column fixed-top navbar-dark bg-light navbar-inverse" style="background-color: transparent;">
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="/PaginaWeb_tacosWorld/index.php"><img id= "logo" src="images/logo.png" alt="tacosWorld"></a>
            <button style="background-color: red;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         
         <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
              <ul class="navbar-nav text-center" >
               <li class="nav-item active"><a id = "secciones"  class="nav-link" href="establishments/establishment.php">Taquerias</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="establishments/promotions.php">Promociones</a></li>
               <li  style="background-color: red;" class="nav-item"><a id = "secciones-s" class="nav-link" href="nosotros.php">Nosotros</a></li>
               <li class="nav-item"><a id = "promocion" class="nav-link" href="ARMATUTACO.html">¡¡Arma  tu taco!!</a>
               </li>
              </ul>
         </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
      <!------------------------------------------------------------------------------------------------------------------------------------------------->
      
      <center><img src="images/nosotros.jpg" alt="" class="img"></center>
      
      
      
      <!------------------------------------------------------------------------------------------------------------------------------------------------->
   
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
    <?php
     include_once("PHP/locations.php");
      ?> 
     <script src="js/mapaFooter.js"></script> <!-- se cargan todos los componentes del mapaFooter.js (incluyendo funciones y variables) -->
      <script>
           var ar = new Array(<?php echo json_encode($datos);  ?>);
          var i;
          for(i = 0; i< ar[0].length;i++){
          var pos = "";
          pos += ar[0][i];
          var prueba = pos.split(',',3);
          
         marcador = L.marker([prueba[0],prueba[1]]).addTo(mapaFooter);
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
                <a href="ARMATUTACO.html" class="badge badge-secondary">Arma tu taco</a>
              </li>
              <li>
                <a href="establishments/establishment.php" class="badge badge-secondary" >Taquerías</a>
              </li>
              <li>
                <a href="establishments/promotions.php" class="badge badge-secondary">Promociones</a>
              </li>
              <li>
                <a href="nosotros.php" class="badge badge-secondary">Nosotros</a>
              </li>
               <li>
                <a href="comment.html" class="badge badge-secondary">¿Te gustó la página? ¡Envíanos tus comentarios!</a>
              </li>
            </ul>
    <hr>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3" align = "center">

            <!-- Links -->
            <h5 class="text-uppercase"  style="color: white;">Nuestras redes Sociales</h5>
            

            <ul class="list-unstyled" >
              <li>
                <a href="#!"><img src="images/facebook.png" style="margin: 5px"></a>
              </li>
              <li>
                <a href="#!"><img src="images/twitter.png" style="margin: 5px"></a>
              </li>
              <li>
                <a href="#!"><img src="images/instagram.png" style="margin: 5px"></a>
              </li>
              <li>
                <a href="#!"><img src="images/youtube.png" style="margin: 5px"></a>
              </li>
            </ul>
    <hr>
          </div>
          <!-- Grid column -->
           <!-- Grid column -->
          <div class="col-md-2 mb-md-0 mb-2">

                 <!-- Links -->
            <center><h5 class="text-uppercase"  style="color: white;"> <img src="images/usuarios.png">Usuarios</h5></center>
            

            <ul class="list-unstyled">
              <li>
                  <center><a href="registry.html"style="text-decoration:none; color:black"><button class="btn btn-warning">Registrarse</button></a></center>
                <hr>
              </li>
              <li>
                  <center> <a href="manager/registry.html"style="text-decoration:none; color:black"><button class="btn btn-danger" >Hacerme socio</button></a></center>
                <hr>
              </li>
              <li>
                <form class="needs-validation" action="/PaginaWeb_tacosWorld/PHP/sesion.php" method="post" novalidate>
                              <!-- Button trigger modal -->
                <center><button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalCenter">
                  Iniciar Sesión
                </button></center>

                <!-- Modal -->
                <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalCenterTitle">Inicio de sesión</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <div class="form-row justify-content-md-center">
            
            
            <div class="col-md-5 mb-3">
              <label for="validationCustomUsername">Usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><img src="icons/usuario.png" alt="" style="width: 25px; height: 25px;"></span>
                </div>
                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Contraseña" aria-describedby="inputGroupPrepend" name="usuario" required>
                <div class="invalid-feedback">
                  Debes ingresar un número de usuario
                </div>
              </div>
            </div>
            <div class="col-md-5 mb-3">
              <label for="validationCustomUsername">Contraseña</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><img src="icons/candado.png" alt="" style="width: 25px; height: 25px;"></span>
                </div>
                <input type="password" class="form-control" id="validationCustomUsername" placeholder="Contraseña" aria-describedby="inputGroupPrepend" name="contrasena" required>
                <div class="invalid-feedback">
                  Debes ingresar tu contraseña
                </div>
              </div>
            </div>
            
          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                      </div>
                    </div>
                  </div>
                </div> 
                </form>              
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