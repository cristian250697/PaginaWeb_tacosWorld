<?php 
include('../../PHP/Conexion.php');
$conection=conectar();

$usuario=$_GET['ID_Usuario'];
$taqueria=$_GET['ID_Taqueria'];

    $query1="SELECT NOMBRE,ID_TAQUERIA FROM TAQUERIA WHERE ID_TAQUERIA=".$taqueria.";";
    $resultado1=mysqli_query($conection,$query1);
    $filas1=mysqli_fetch_array($resultado1) or die (mysqli_error());
   

    
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
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="#">
           <img id= "logo" src="../../images/logo.png" alt="tacosWorld"></a>
            <button style="background-color: red;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         
         <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
              <ul class="navbar-nav text-center" >
               <li class="nav-item active"><a id = "secciones"  class="nav-link" href="#">Taquerias</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="#">Promociones</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="#">Nosotros</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="#">Arma  tu taco</a>
               </li>
              </ul>
         </div>
    </nav>
    
   <!---------------------------------------------------------FORMULARIO---------------------------------------------------------------------------------->
   <br><br><br><br><br><br><br>
   <div id="h1">
    <h1 class="h1 justify-content-md-center">Formulario</h1>
    <h6 class=h6>Aqui tomaremos tu orden y la enviaremos directamente al local.</h6>
   </div>
   <br>
   <center>
   <div id="formulario" class="shadow p-3 mb-5 bg-white rounded justify-content-md-center" style="background-color: #F2F2F2; width: 70%;">
       
       <label for="" class="h3">Taquería<br>"<?php echo $filas1['NOMBRE']; ?>"</label><br>
       <label for="" class="h6">te ofrece los siguientes productos:</label>
       <div class="container" style="height: 200px; width: 100%; overflow: auto;">
       <table class="table table-striped table-hover">
               <thead class="thead-dark">
                   <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Tipo</th>
                       <th scope="col">Nombre</th>
                       <th scope="col">Descripcion</th>
                       <th scope="col">Precio Pesos(MXN) </th>
                       <th scope="col">Estatus</th>
                   </tr>
               </thead>
               <tbody>
                <?php

                    $query2="SELECT * FROM PRODUCTO ";
                    $resultado2=mysqli_query($conection,$query2) or die(mysqli_error($conection));
                    
                      while($consulta =mysqli_fetch_array($resultado2)){ 
                   ?>
                  
                 <tr>
		                <td><?php echo $consulta['ID_PRODUCTO']; ?></td>
		                <td><?php echo $consulta['TIPO']; ?></td>
		                <td><?php echo $consulta['NOMBRE']; ?></td>
		                <td><?php echo $consulta['DESCRIPCION']; ?></td>
                        <td>$<?php echo $consulta['PRECIO']; ?></td>
                        <?php 
                     if($consulta['ESTATUS']==1){
                     $activo="En existencia";
                     }else{
                     $activo="No hay existencia";
                     }
                     ?>
                        <td><?php echo $activo; ?></td>
                    </tr>
                     <?php } ?>
           </tbody>
       </table>
       </div>
       <form class="needs-validation" action="../../PHP/EnviarOrdenUsuario.php?IDT=<?php echo $taqueria; ?>&IDU=<?php echo $usuario;?>" method="post" novalidate>
          <div class="form-row justify-content-md-center">
            <div class="col-md-3 mb-2">
              <label for="validationCustom01">ID del producto</label>
              <input type="number" class="form-control" id="validationCustom01" placeholder="Numero de producto" name="producto" required>
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar tu nombre
                </div>
            </div>
            <div class="col-md-3 mb-2">
              <label for="validationCustom02">Cantidad</label>
              <input type="number" class="form-control" id="validationCustom02" placeholder="Hasta 15 productos en linea" name="cantidad" required>
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar tus apellidos
                </div>
            </div>            
          </div>
          
          <div class="form-group justify-contentd-md-center">           
            <div class="col-md-6 mb-3">
              <label for="validationCustom04">Descripcion</label>
              <textarea class="form-control" placeholder="Incluye informacion importante como producto a tempreatura ambiente, sin cebolla, salsa extra, etc." id="descripcion" name="descripcion" rows="10" required></textarea>
              <div class="invalid-feedback">
                Deberias agregar una descripción
              </div>
            </div>
            
          </div>
          
          
          <button class="btn btn-danger" type="submit">Enviar orden</button>
    </form>
       
   </div>
   </center>
   <!------------------------------------------------------------------------------------------------------------------------------------------------>
   
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