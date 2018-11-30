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
        

        
        a#secciones{
            width: 250px;
        }
        
        a#promocion{
            width: 250px;
            color: white;
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
       /*---------------footer---------------*/
        @media{
            
           
        }
        footer {
   
    width:100%;
    margin: 0px auto;
    height: 20em;
    margin-top: 8em;
    bottom: 0;
    right: 0;
    left: 0;
    background: #454545;
}
 
      </style>

    <title>Bienvenido - TacosWorld</title>
  </head>
  <body>
   <!-------------------------------------------------------------- BARRA DE NAVEGACIÓN ------------------------------------------------------------------->
    <nav class="navbar navbar-expand-md flex-column  navbar-dark bg-light navbar-inverse" style="background-color: transparent;">
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="index.php"><img id= "logo" src="images/logo.png" alt="tacosWorld"></a>
            <button style="background-color: red;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         
         <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
              <ul class="navbar-nav text-center" >
               <li class="nav-item active"><a id = "secciones"  class="nav-link" href="establishments/establishment.html">Taquerias</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="#">Promociones</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="nosotros.html">Nosotros</a></li>
               <li style="background-color: red;" class="nav-item"><a id = "promocion" class="nav-link" href="ARMATUTACO.html">¡¡Arma  tu taco!!</a>
               </li>
              </ul>
         </div>
    </nav>
    
    <!------------------------------------------------------CARROUSEL DE IMAGENES ---------------------------------------------------------------->
    
    <div id="tacos" class="carousel slide" data-ride="carousel" style="max-height: 550px;" >

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#tacos" data-slide-to="0" class="active"></li>
    <li data-target="#tacos" data-slide-to="1"></li>
    <li data-target="#tacos" data-slide-to="2"></li>
    <li data-target="#tacos" data-slide-to="3"></li>
    <li data-target="#tacos" data-slide-to="4"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" style="max-height: 550px;">
    <div class="carousel-item active">
      <img class="img-fluid" id = "carrousel" src="images/alPastor.jpg" alt="Al pastor" width="1100px" height="500px">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" id = "carrousel" src="images/barbacoa.jpg" alt="barbacoa" width="1100px" height="500px">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" id = "carrousel" src="images/carne.jpg" alt="carne" width="1100px" height="500px">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" id = "carrousel" src="images/casero.jpg" alt="casero" width="1100px" height="500px">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" id = "carrousel" src="images/res.jpg" alt="Carne de res" width="1100px" height="500px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#tacos" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#tacos" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

    <!---------------------------------------------------------------------------------------------------------------------------------------->
    
    <center>
   <div id="home" class="shadow p-3 mb-5 bg-white rounded" style="width: 95%;">
       
       <div class="row justify-content-between">
            <div class="col-md-6 mb-2" >
             <label for="">Une tu taqueria a nosotros</label>
              <img src="images/unete.jpg" alt="" class="img-fluid">
              
            </div>
            <div class="col-md-3 mb-2" style="display: flex; align-items: center;">
             <label for=""><p class="h3">Tenemos varias taquerias asociadas y... son las mejores</p></label>             
            </div>
            
            <div class="col-md-3 mb-2">
              <label>Publicidad</label>
              <center><img src="images/saludable.png" alt="" class="img-fluid" width="300px" height="750px">
              </center>
            </div>
                        
          </div>
          
          <div class="form-row">
              <div class="col-md-9 mb-2">
             <label for="">También puedes conseguir trabajo poniendote en contacto con las taquerias</label>
              <img src="images/taquero.jpg" alt="" class="img-fluid">
              <label for=""><p class="h3">Tenemos mas de 50 taquerias afiliadas</p></label>
            </div>
            
            <div class="col-md-3 mb-2">
              <br><br>
              <center><img src="images/publicidad.jpg" alt="" class="img-fluid" width="300px" height="750px">
              </center>
            </div>
            
          </div>
          
          <div class="row">
            <div class="col-md-3 mb-2" style="display: flex; align-items: center;">
             <label for="">
                
                 <p class="h3">Cada taquería te ofrece multiples productos:</p>
                <br>
                <ul>
                    <li>Multiples complementos</li>
                    <li>Diferentes alimentos</li>
                    <li>Grán variedad de bebidas</li>
                    <li>Servicio a domicilio</li>
                </ul>
                
                
                </label>
            </div>
            <div class="col-md-6 mb-2" >
             <label for="">Variedad de productos</label>
              <img src="images/carnes.jpg" alt="" class="img-fluid">
              
            </div>
            
          </div>
          <hr>
          <p class="h4">Eventos</p>
          <hr>
          <div class="row">
            <div class="col-md-4 mb-2" style="display: flex; align-items: center;">
             <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FMorelianasOficial%2Fposts%2F1856179214508648&width=500" width="500" height="508" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="col-md-4 mb-2" style="display: flex; align-items: center;">
             <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmimoreliacom%2Fposts%2F10155638134210059&width=500" width="500" height="508" style="border:none;overflow:scroll" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              
            </div>
            
          </div>

         
           
   </div>
   </center>
 

   <!------------------------------------------------------------------------------------------------------------------------------------------------->
   
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  
   <!------------------------------------------------------FOOTER ---------------------------------------------------------------->
  <footer>
  <div id="mapaDetalle">
 <span>  Cerca de tí </span>
 <br>
   <div id="mapaFooter"></div>
    <?php
     include_once("PHP/locations.php");
      ?> 
     <script src="../PaginaWeb_tacosWorld/js/mapaFooter.js">
    var arr = <?php echo $posiciones ?>  
        alert("ddd");
    </script> 
   
      
      </div>
    </footer>
  
</html>