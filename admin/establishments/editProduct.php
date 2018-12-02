<?php 
include('../../PHP/Conexion.php');
$conection=conectar();

$consulta=consultaPersona($_GET['ID']);
    
    
function consultaPersona($id){
    
    global $conection;
    $query="SELECT * FROM PRODUCTO WHERE ID_PRODUCTO=".$id.";";
    $resultado=mysqli_query($conection,$query);
    $filas=mysqli_fetch_array($resultado) or die (mysqli_error());
    return [$filas['ID_PRODUCTO'],
            $filas['TIPO'],
            $filas['NOMBRE'],
            $filas['DESCRIPCION'],
            $filas['PRECIO'],
            $filas['ESTATUS']];
}
    
?>


<!DOCTYPE HTML>
<html lang="en">
  <head>
    
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
    <center><h1 class="h1">Panel de edición de bolsa de trabajo</h1></center>
    <center>
      <div id="formulario" class="shadow p-3 mb-5 bg-white rounded justify-content-md-center" style="background-color: #F2F2F2; width: 70%;">
       <br>
       <form class="needs-validation" action="../../PHP/EditarProductsAdmin.php" method="post" novalidate>
          <div class="form-row justify-content-md-center">           
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Producto</label>
              <input type="text" class="form-control" id="validationCustom04" value="<?php echo $consulta[0];?>"placeholder="Aqui va el nombre o id del producto que se va editar este campo no se puede modificar por el gerente" name="id" readonly>
            </div>                
          </div>
           
           <div class="form-row justify-content-md-center">
            
          <div class="col-md-4 mb-2">
              <label for="validationCustom02">Tipo</label>
              <input type="text" class="form-control" id="validationCustom02" value="<?php echo $consulta[1]?>" placeholder="Tipo de producto" value="Tipo del producto lleno con la BD" name="apellido" required readonly> 
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar el nombre
                </div>
            </div> 
           
            <div class="col-md-4 mb-2">
              <label for="validationCustom02">Nombre</label>
              <input type="text" class="form-control" id="validationCustom02" value="<?php echo $consulta[2];?>" placeholder="Sueldo total" name="nombre" required>
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar el nombre
                </div>
            </div>            
          </div>
          
          <div class="form-row justify-content-md-center">
          <div class="col-md-4 mb-2">
              <label for="validationCustom02">Descripcion</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment" required><?php echo $consulta[3]; ?></textarea>
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar descripcion como porcion o contenido
                </div>
            </div>
             
            <div class="col-md-2 mb-2">
              <label for="validationCustom02">Precio Pesoso(MXN) </label>
              <input type="text" class="form-control" id="validationCustom02" value="<?php echo $consulta[4]; ?>" placeholder="Precio en Pesos(MNX) " name="precio" required>
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar el nombre
                </div>
            </div>
             
             <div class="col-md-2 mb-2">
             <br>
            <div class="form-check">
                       <?php if ($consulta[5] == 1){ ?>
                        
                       <input class = "form-check-input" type="checkbox" name="activo" checked disabled required>
                       <label class="form-check-label" for="defaultCheck1">Disponible</label>    
                       
                       
                       <?php }else{ ?>
                       <input class = "form-check-input" type="checkbox" name="activo"   >
                       <label class="form-check-label" for="defaultCheck1">Disponible</label>    
                       
                       <?php } ?>
            </div>     
          </div>
              
           </div>
          
          <br>
          <button class="btn btn-danger" type="submit">Modificar</button>
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