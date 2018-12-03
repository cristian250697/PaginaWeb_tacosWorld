<?php 
include('../../PHP/Conexion.php');
$conection=conectar();

$consulta=consultaPersona($_GET['ID']);
    
function consultaPersona($id){
    
    global $conection;
    $query="SELECT ID_TAQUERIA,ESTATUSBT,TELEFONO,NOMBRE,DIRECCION,LATITUD,LONGITUD,DESCRIPCION,ID_USUARIO,ESTATUS_SUCURSAL,IMAGEN FROM TAQUERIA WHERE ID_TAQUERIA=".$id.";";
    $resultado=mysqli_query($conection,$query);
    $filas=mysqli_fetch_array($resultado) or die (mysqli_error());
    return [$filas['ID_TAQUERIA'],
            $filas['ESTATUSBT'],
            $filas['TELEFONO'],
            $filas['NOMBRE'],
            $filas['DIRECCION'],
            $filas['LATITUD'],
            $filas['LONGITUD'],
            $filas['DESCRIPCION'],
            $filas['ID_USUARIO'],
            $filas['ESTATUS_SUCURSAL'],
            $filas['IMAGEN']];
}

?>

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
        
      </style>

    <title>Panel de administrador - TacosWorld</title>
  </head>
  <body>
   <!-------------------------------------------------------------- BARRA DE NAVEGACIÓN ------------------------------------------------------------------->
    <nav class="navbar navbar-expand-md flex-column fixed-top navbar-dark bg-light navbar-inverse" style="background-color: transparent;">
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="#"><img id= "logo" src="../../images/logo.png" alt="tacosWorld"></a>
                   
         <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="../perfil.html">Perfil</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="../users.php">Usuarios</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sucursales</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="taquerias.php">Taquerias</a>
              <a class="dropdown-item" href="products.php">Productos</a>
              <a class="dropdown-item" href="job.php">Bolsa de trabajo</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="promotions.php">Promociones</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="comments.php">Comentarios</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../comments.php">Comentarios</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Cerrar Sesión</a></li>
        </ul>
    </nav>
    
    <!------------------------------------------------------TABLA ---------------------------------------------------------------->
    <br><br><br><br><br><br><br><BR></BR><br>
    <center><h1 class="h1">Panel de edición de tu taqueria</h1></center>
    <center>
   <div id="formulario" class="shadow p-3 mb-5 bg-white rounded justify-content-md-center" style="background-color: #F2F2F2; width: 80%;">
       
       <form class="needs-validation" action="../../PHP/EditarTaqueriaAdmin.php" method="post" novalidate enctype="multipart/form-data">
          <div class="form-row justify-content-md-center">           
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Taqueria</label>
              <input type="text" class="form-control" id="validationCustom04" value="<?php echo $consulta[0]; ?>" placeholder="Aqui va el nombre de la taqueria que se va editar este campo no se puede modificar por el gerente" name="id" readonly>
            </div>                
          </div>
                <div class="form-row">
            <div class="col-md-4 mb-2">
              <label for="validationCustom01">Nombre</label>
              <input type="text" class="form-control" id="validationCustom01" value="<?php echo $consulta[3];?>" placeholder="Nombre de tu local" required name="nombre">
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar tu nombre
                </div>
            </div>
            <div class="col-md-2 mb-2">
             <label for="validationCustom04">Teléfono</label>
              <input type="text" class="form-control" id="validationCustom04" value="<?php echo $consulta[2];?>" placeholder="Lada - Telefono" name="telefono" required>
              <div class="invalid-feedback">
                Es obligatorio llenar este campo
                </div>
              <div class="invalid-feedback">
                  Debes ingresar tu nombre
                </div>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationCustom02">Dirección</label>
              <input type="text" class="form-control" id="validationCustom02" value="<?php echo $consulta[4];?>"
              placeholder="Calle, Número, Municipio, Estado" required name= "direccion">
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar la dirección de tu local
                </div>
            </div>            
          </div>
          <div class="form-row">
          <div class="col-md-3 mb-3">
              <label for="validationCustomUsername">Latitud</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                </div>
                <input readonly type="text" class="form-control" id="latitud" value="<?php echo $consulta[5];?>" placeholder="Latitud" aria-describedby="inputGroupPrepend" name="latitud" >
                <div class="invalid-feedback">
                  Debes ingresar la altitud de tu local
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustomUsername">Longitud</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                </div>
                <input readonly type="text" class="form-control" value="<?php echo $consulta[6];?>" id="longitud" placeholder="Longitud" aria-describedby="inputGroupPrepend" name="longitud" >
                <div class="invalid-feedback">
                  Debes ingresar la longitud de tu local
                </div>
              </div>
            </div>
            
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Imagen</label>
              <input type="file" class="form-control file" name="imagen" id="validationCustom03" placeholder="Calle, Número, Municipio, Estado" >
              <div class="invalid-feedback">
                Debes incluir una imagen para que conozcan tu local
              </div>
            </div>
           </div>

         
          <div class="form-row">           
            <div class="col-md-6 mb-3" >
              <label for="validationCustom04">Descripcion</label>
              <textarea class="form-control" placeholder="Incluye informacion importante como tus horarios, tus días de trabajo" name="descripcion" id="descripcion" rows="10" required> <?php echo $consulta[7];?></textarea>
              <div class="invalid-feedback">
                Deberias agregar una descripción
              </div>
            </div>
            
            <div class="col-md-2 mb-2">
             <br>
            <div class="form-check">
                       <?php if ($consulta[1] == 1){ ?>
                        
                       <input class = "form-check-input" type="checkbox" name="activoB"  checked >
                       <label class="form-check-label" for="defaultCheck1">Estado bolsa de trabajo Activo</label>    
                       
                       
                       <?php }else{ ?>
                       <input class = "form-check-input" type="checkbox" name="activoB"   >
                       <label class="form-check-label" for="defaultCheck1">Estado bolsa de trabajo Activo</label>    
                       
                       <?php } ?>
            </div>  
            </div>
            <div class="col-md-2 mb-2">
             <br>
            <div class="form-check">
                       <?php if ($consulta[9] == 1){ ?>
                        
                       <input class = "form-check-input" type="checkbox" name="activoT"  checked  >
                       <label class="form-check-label" for="defaultCheck1">Estado sucursal Activo</label>    
                       
                       
                       <?php }else{ ?>
                       <input class = "form-check-input" type="checkbox" name="activoT"   >
                       <label class="form-check-label" for="defaultCheck1">Estado sucursal Activo</label>    
                       
                       <?php } ?>
            </div>     
          </div>
                  
             

            
             <div class="col-md-6 mb-12">
              <label for="validationCustom04">Mapa</label>
              <div class = "row" style="width: 100%; height: 290px; overflow: auto; display: block;">
                  <!-------------- MAPA -------------->
                  <div id="mapaTaqueria">
                  <script src="../../js/mapaTaqueria.js"></script>
                  </div>
              </div>
            </div>
             <div class="col-md-6 mb-2">         
                <img height="50%" src="data:image/jpg;base64,<?php echo base64_encode($consulta[10]);?>">
              </div>
                          
          </div>
          
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Acepto los <a href="#">Términos y condiciones</a>.
              </label>
              <div class="invalid-feedback">
                Debes aceptar los términos y condiciones.
              </div>
            </div>
          </div>
          <button class="btn btn-danger" type="submit" onclick = "obtenDatos()">Aceptar</button>
    </form>
       
   </div>
   </center>

  
   <!------------------------------------------------------------------------------------------------------------------------------------------------->
   
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
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