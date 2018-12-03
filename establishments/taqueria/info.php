<!DOCTYPE HTML>
<html lang="en">
  <head>
   
      <!------------- MAPA------->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS --> <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
  
   <link rel="stylesheet" href="../../css/estilo.css">
    <!--------------- MAPA------->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
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
        
        div#h1{
            text-align: center;
            
        }
      </style>

    <title>Nueva Orden - TacosWorld</title>
  </head>
  <body>
   <!-------------------------------------------------------------- BARRA DE NAVEGACIÓN ------------------------------------------------------------------->
    <nav class="navbar navbar-expand-md flex-column navbar-inverse scrolling-navbar fixed-top bg-light" style="background-color: transparent;">
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0"  href="/PaginaWeb_tacosWorld/index.php">
           <img id= "logo" src="../../images/logo.png" alt="tacosWorld"></a>
            <button style="background-color: red;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         
         <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
              <ul class="navbar-nav text-center" >
               <li class="nav-item active"><a id = "secciones"  class="nav-link"href="../establishment.php">Taquerias</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="../promotions.php">Promociones</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="../../nosotros.php">Nosotros</a></li>
               <li class="nav-item"><a id = "promocion" class="nav-link" href="../../ARMATUTACO.html">Arma  tu taco</a>
               </li>
              </ul>
         </div>
    </nav>
    
   <!---------------------------------------------------------FORMULARIO---------------------------------------------------------------------------------->
   <br><br><br><br><br><br><br>
   
   <?php
                      include('../../PHP/Conexion.php');
                      $conection=conectar();
                        
      
                        $idTaqueria = $_GET['ID'];
                    if (!$conection) {
                        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                         exit;
                    }
                
                    
$sql = "SELECT LATITUD,LONGITUD FROM TAQUERIA WHERE ID_TAQUERIA=".$idTaqueria.";";

$posiciones = mysqli_query($conection,$sql) or die(mysqli_error($conection));


$datos = array();
$i=0;

while($fila= mysqli_fetch_row($posiciones)){

    $datos[$i] = $fila;
    $i++;
  
}

                    
                    
                    $query="SELECT IMAGEN,NOMBRE,DESCRIPCION,DIRECCION FROM TAQUERIA WHERE ID_TAQUERIA=".$idTaqueria.";";
                    $resultado=mysqli_query($conection,$query) or die(mysqli_error($conection));
                    
                      while($consulta =mysqli_fetch_array($resultado)){ 
    ?>
   
   
   
   
   
   
   <div id="h1">
    <h1 class="h1 justify-content-md-center">Disfruta estas delicias</h1>
    <h6 class=h6>Informacion de la taqueria "<?php echo $consulta['NOMBRE'];?>"</h6>
   </div>
   <br>
   <center>
   <div id="taqueria" class="shadow p-3 mb-5 bg-white rounded justify-content-md-center" style="background-color: #F2F2F2; width: 85%;">
   <div class="form-row justify-content-center">
     
     <div class="col-md-6 justify-content-md-center" style="height: 100%">
        <label for="" class="h4">Imagen de la taqueria</label><br>
        <img height="50%" width="100%" src="data:image/jpg;base64,<?php echo base64_encode($consulta['IMAGEN']);?>">
     </div>
       <div class="col-md-6 justify-content-md-center">
        <label for="" class="h4">Información</label>
         <div class="col-12">
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Nombre de la taqueria:
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta['NOMBRE'];?>
                </div>
             </div>
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Dirección: 
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta['DIRECCION'];?>
                </div>
             </div>
             <div class="row mb-3 justify-content-md-between">
                <div class="col-3 p-0" style="text-align: left;">
                    Descripción: 
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta['DESCRIPCION'];?>
                </div>
             </div>
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Mapa:
                </div>
                <div class="col-9" style="width: 100%; height: 290px; overflow: auto; display: block;">
                 <!-------------- MAPA -------------->
                  <div id="mapaTaqueria"></div>
                  <script src="../../js/mapaInfo.js"></script>
                <script>
           var ar = new Array(<?php echo json_encode($datos);  ?>);
          var i;
          for(i = 0; i< ar[0].length;i++){
          var pos = "";
          pos += ar[0][i];
          var prueba = pos.split(',',2);
                    mapaInfo.setView([prueba[0],prueba[1]],11);
         marcador = L.marker([prueba[0],prueba[1]]).addTo(mapaInfo);
                marcador.bindPopup("¡Aquí está la taquería!").openPopup();
          }
      </script>
                </div>
             </div>
             
             
         </div>
       </div>
    
    </div>
    <br>
    <div class="row justify-content-center">
    <label for="" class="h4">Productos ofrecidos</label>
    
    
    
    </div>
    <br>
    <!---Aqui se envia el id de la taqueria y el id del usuario obtenido por secion-->
    <a href="orders.php?ID_Taqueria=<?php echo $idTaqueria; ?>&ID_Usuario=1">
   <button class="btn btn-danger">Pedir comida</button>
   </a>
   </div>
    <?php } ?>
   </center>
   
   
   <!------------------------------------------------------------------------------------------------------------------------------------------------>
   
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
   <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"  style="background-color: #2E2E2E; color: white">© 2018 Copyright:
      <p> TacosWorldMexico.com</p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  
</html>
