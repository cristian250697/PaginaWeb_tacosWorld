<?php 
$consulta=consultaPersona($_GET['ID']);

function consultaPersona($id){
    include('Conexion.php');
    $conection=conectar();
    
    $query="SELECT * FROM USUARIO WHERE ID='".$id."';";
    $resultado=mysqli_query($conection,$query);
    $filas=mysqli_fetch_array($resultado) or die (mysqli_error());
    return [$filas['ID_USUARIO'],
            $filas['NOMBRE'],
            $filas['APELLIDO'],
            $filas['CORREO'],
            $filas['PASS'],
            $filas['TELEFONO'],
            $filas['DIRECCION'],
            $filas['ROL']];
}

?>


<!DOCTYPE HTML>
<html lang="en">
  <head>
    
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
            width: 25%;
            margin: auto;        
            
        }
        
        div#h1{
            text-align: center;
            
        }
      </style>

    <title>Bienvenido - TacosWorld</title>
  </head>
  <body>
   <!-------------------------------------------------------------- BARRA DE NAVEGACIÓN ------------------------------------------------------------------->
    <nav class="navbar navbar-expand-md flex-column fixed-top navbar-dark bg-light navbar-inverse" style="background-color: transparent;">
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="#"><img id= "logo" src="../images/logo.png" alt="tacosWorld"></a>
                     
         <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="users.html">Usuarios</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sucursales</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="establishments/taquerias.html">Taquerias</a>
              <a class="dropdown-item" href="establishments/products.html">Productos</a>
              <a class="dropdown-item" href="establishments/job.html">Bolsa de trabajo</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="establishments/promotions.html">Promociones</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="establishments/comments.html">Comentarios</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comments.html">Comentarios</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Cerrar Sesión</a></li>
        </ul>
    </nav>
    
   <!---------------------------------------------------------FORMULARIO---------------------------------------------------------------------------------->
   <br><br><br><br><br><br><br>
   <div id="h1">
    <h1 class="h1 justify-content-md-center">Editar usuario</h1>
   </div>
   <br>
   <center>
   <div id="formulario" class="shadow p-3 mb-5 bg-white rounded justify-content-md-center" style="background-color: #F2F2F2; width: 70%;">
       <h3 class="h3">Datos personales del usuario</h3>
       <hr>
       <form class="needs-validation" action="PHP/Registro.php" method="post" novalidate>
         <div class="form-row justify-content-md-center">           
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">ID</label>
              <input type="text" class="form-control" id="validationCustom04" placeholder="Aqui va el id del usuario que se va editar este campo no se puede modificar por el gerente" name="telefono" readonly>
            </div>                
          </div>
         
          <div class="form-row">
            <div class="col-md-6 mb-2">
              <label for="validationCustom01">Nombre (s)</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" name ="name" required>
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar tu nombre
                </div>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationCustom02">Apellido (s)</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" name="apellido" required>
              <div class="valid-feedback">
                Todo está en orden
              </div>
              <div class="invalid-feedback">
                  Debes ingresar tus apellidos
                </div>
            </div>            
          </div>
          <div class="form-row">
          <div class="col-md-6 mb-3">
              <label for="validationCustomUsername">Correo</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Usuario" aria-describedby="inputGroupPrepend" name ="email" required>
                <div class="invalid-feedback">
                  Ingresa correctamente el correo
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Dirección</label>
              <input type="text" class="form-control" id="validationCustom03" placeholder="Calle, Número, Municipio, Estado" name="direccion" required>
              <div class="invalid-feedback">
                Es obligatorio llenar este campo
              </div>
            </div>
           </div>

         
          <div class="form-row justify-content-md-center">           
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Teléfono</label>
              <input type="text" class="form-control" id="validationCustom04" placeholder="Lada - Telefono" name="telefono" required>
              <div class="invalid-feedback">
                Es obligatorio llenar este campo
              </div>
            </div> 
            <div class="col-md-4 mb-2">
            <br>
                  
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Rol</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected disabled>Selecciona uno...</option>
                
                    <option>Administrador</option>
                    <option>Usuario</option>
                    <option>Gerente</option>
                    
                
              </select>
            </div>     
              </div>          
          </div>
          
          <div class="form-row justify-content-md-center">
            
            
            <div class="col-md-3 mb-3">
              <label for="validationCustomUsername">Contraseña</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><img src="../icons/candado.png" alt="" style="width: 25px; height: 25px;"></span>
                </div>
                <input type="password" class="form-control" id="validationCustomUsername" placeholder="Contraseña" aria-describedby="inputGroupPrepend" name="pass" required>
                <div class="invalid-feedback">
                  Ingresa una contraseña válida
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustomUsername">Verifica contraseña</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><img src="../icons/palomita.png" alt="" style="width: 25px; height: 25px;"></span>
                </div>
                <input type="password" class="form-control" id="validationCustomUsername" placeholder="Contraseña" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Verifica tu contraseña
                </div>
              </div>
            </div>
            
          </div>
          
           <button class="btn btn-danger" type="submit">Modificar</button>
    </form>
       
   </div>
   </center>
   <!------------------------------------------------------------------------------------------------------------------------------------------------>
   
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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