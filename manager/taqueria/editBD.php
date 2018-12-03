<!-- El gerente puede agregar promociones -->
<!-- El usuario podrá editar su perfil -->
<?php
include('../../PHP/Conexion.php');
$conection=conectar();

$sesion=$_GET['IDU'];
$taqueria=$_GET['IDT'];

    $query="SELECT * FROM BOLSA_TRABAJO WHERE ID_TAQUERIA=".$taqueria.";";
    $resultado=mysqli_query($conection,$query);
    $filas=mysqli_fetch_array($resultado) or die (mysqli_error()); 
	
	$queryy="SELECT * FROM TAQUERIA WHERE ID_TAQUERIA=".$taqueria.";";
    $resultadoo=mysqli_query($conection,$queryy);
    $filass=mysqli_fetch_array($resultadoo) or die (mysqli_error()); 
	
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
            <button style="background-color: red;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         
                <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="../perfilGerente.php?IDU=<?php echo $sesion;?>&IDT=<?php echo $taqueria;?>">Perfil</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="../edit.php?IDU=<?php echo $sesion;?>&IDT=<?php echo $taqueria;?>">Editar Perfil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mi taqueria</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="editTaqueria.php?IDU=<?php echo $sesion;?>&IDT=<?php echo $taqueria;?>">Editar taqueria</a>
              <a class="dropdown-item" href="editPromotions.php?IDU=<?php echo $sesion;?>&IDT=<?php echo $taqueria;?>">Editar promociones</a>
              <a class="dropdown-item" href="editBD.php?IDU=<?php echo $sesion;?>&IDT=<?php echo $taqueria;?>">Editar bolsa de trabajo</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comments.php?IDU=<?php echo $sesion;?>&IDT=<?php echo $taqueria;?>">Comentarios</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="../../PHP/cerrarSesion.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    
    <!------------------------------------------------------TABLA ---------------------------------------------------------------->
    <br><br><br><br><br><br><br><BR></BR><br>
    <center><h1 class="h1">Panel de edición de tu bolsa de trabajo</h1></center>
    <center>
   <div id="formulario" class="shadow p-3 mb-5 bg-white rounded justify-content-md-center" style="background-color: #F2F2F2; width: 80%;">
       
       <form class="needs-validation" action="../../PHP/EditarBolsaManager.php?ID=<?php echo $filas['ID_BOLSA']; ?>" method="post" novalidate>
          <div class="form-row justify-content-md-center">           
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Taqueria</label>
              <input type="text" class="form-control" id="validationCustom04" value="<?php echo $filass['NOMBRE']; ?>" placeholder="Aqui va el nombre de la taqueria que se va editar este campo no se puede modificar por el gerente" name="telefono" readonly>
            </div>                
          </div>
           
          <div class="form-row justify-content-md-center">
          <div class="col-md-6 mb-3">
              <label for="validationCustomUsername">Sueldo</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">$</span>
                </div>
                <input type="number" class="form-control" id="sueldo" value="<?php echo $filas['SUELDO']; ?>" placeholder="Sueldo quincenal" aria-describedby="inputGroupPrepend" name="sueldo" >
                <div class="invalid-feedback">
                  Debes ingresar la altitud de tu local
                </div>
              </div>
            </div>
           </div>

         
          <div class="form-group justify-contentd-md-center">           
            <div class="col-md-6 mb-3">
              <label for="validationCustom04">Descripcion</label>
              <textarea class="form-control" placeholder="Incluye informacion importante como de que ofreces trabajo, sueldos, horarios, etc." name="descripcion" id="descripcion" rows="10" required><?php echo $filas['DESCRIPCION']; ?></textarea>
              <div class="invalid-feedback">
                Deberias agregar una descripción
              </div>
            </div>
            
          </div>
         
          <button class="btn btn-danger" type="submit">Aceptar</button>
    </form>
       
   </div>
   </center>

  
   <!------------------------------------------------------------------------------------------------------------------------------------------------->
   
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