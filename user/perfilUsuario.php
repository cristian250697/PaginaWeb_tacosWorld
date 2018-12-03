<?php
session_start();
$sesion=$_SESSION['usuario'];

if(isset($_SESSION['usuario'])){    

include('../PHP/Conexion.php');
$conection=conectar();

function consultaPersona($id){
    
    global $conection;
    $query="SELECT * FROM USUARIO WHERE ID_USUARIO=".$id.";";
    $resultado=mysqli_query($conection,$query);
    $filas=mysqli_fetch_array($resultado) or die (mysqli_error());
    return [$filas['ID_USUARIO'],
            $filas['NOMBRE'],
            $filas['APELLIDO'],
            $filas['CORREO'],
            $filas['PASS'],
            $filas['TELEFONO'],
            $filas['DIRECCION'],
            $filas['ROL'],
            $filas['ESTATUS']];
}

    $consulta=consultaPersona($sesion);
    
?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
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
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="index.php"><img id= "logo" src="../images/logo.png" alt="tacosWorld"></a>
            <button style="background-color: red;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         
         <div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
              <ul class="navbar-nav text-center" >
               <li class="nav-item active"><a id = "secciones"  class="nav-link" href="perfilUsuario.php">Perfil</a></li>
               <li class="nav-item active"><a id = "secciones"  class="nav-link" href="edit.php?IDU=<?php echo $sesion; ?>">Editar mi perfil</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="orders.php?IDU=<?php echo $sesion; ?>">Mis ordenes</a></li>
               <li class="nav-item"><a id = "secciones" class="nav-link" href="../PHP/cerrarSesion.php">Cerrar sesion</a></li>
              </ul>
         </div>
    </nav>
    
    <!------------------------------------------------------TABLA ---------------------------------------------------------------->
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
    
    <!------------------------------------------------------------------------------->
    
 <center><h1 class="h1">Perfil del usuario</h1></center>  
   <center>  
    <div class=" shadow-lg p-4 mb-5 bg-white rounded" style="height: 420px; width: 70%; overflow:auto;">
         <div class="row justify-content-around">
     
       <div class="col-md-6 justify-content-md-center">
        <label for="" class="h4">Información</label>
         <div class="col-12">
            <br><br>
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Nombre:
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta[1]; ?>&nbsp;
                    <?php echo $consulta[2]; ?>
                </div>
             </div>
             <div class="row mb-3 justify-content-md-between">
                <div class="col-3 p-0" style="text-align: left;">
                    Correo: 
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta[3]; ?>
                </div>
             </div>
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Celular
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta[5]; ?>
                </div>
             </div>
             <div class="row mb-3">
                 <div class="col-3 p-0" style="text-align: left;">
                    Dirección:
                </div>
                <div class="col-9" style="text-align: left;">
                    <?php echo $consulta[6]; ?>
                </div>
             </div>
             
             
         </div>
       </div>
    
    </div>
    
    
    
    </div>
    </center>
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>


<?php }else{
    header('Location: ../error.html');

}

?>