<?php
$sesion=$_GET['IDU'];
include('../PHP/Conexion.php');
$conection=conectar();

if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
    $query="SELECT ID_TAQUERIA,ID_PRODUCTO,CANTIDAD,OBSERVACION,ESTATUS FROM PEDIDOS WHERE ID_USUARIO=".$sesion."";
    $resultado=mysqli_query($conection,$query) or die(mysqli_error($conection));
?>

<!-- El usuario podrá ver sus ordenes-->

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
    <br><br><br><br><br><br><br><br><br><br>
    <center><h1 class="h1">Tus ordenes</h1></center>
    <div class="container shadow-lg p-4 mb-5 bg-white rounded" style="overflow:auto;">
        <table class="table table-striped table-hover">
               <thead class="thead-dark">
                   <tr>
                       <th scope="col">Taqueria</th>
                       <th scope="col">Producto</th>
                       <th scope="col">Cantidad</th>
                       <th scope="col">Observacion</th>
                       <th scope="col">Estatus</th>
                   </tr>
               </thead>
               <tbody>
                  <!-- CON PHP GENERAR FILAS -->
<?php while($consulta =mysqli_fetch_array($resultado)){ 
				   
					$queryy="SELECT NOMBRE FROM TAQUERIA WHERE ID_TAQUERIA=".$consulta['ID_TAQUERIA']."";
					$resultadoo=mysqli_query($conection,$queryy) or die(mysqli_error($conection));
					$consultaa =mysqli_fetch_array($resultadoo);
			
			 		$queryyy="SELECT NOMBRE FROM PRODUCTO WHERE ID_PRODUCTO=".$consulta['ID_PRODUCTO']."";
					$resultadooo=mysqli_query($conection,$queryyy) or die(mysqli_error($conection));
					$consultaaa =mysqli_fetch_array($resultadooo);
				   
				   ?>
	                <tr>
		                <td><?php echo $consultaa['NOMBRE']; ?></td>
		                <td><?php echo $consultaaa['NOMBRE']; ?></td>
		                <td><?php echo $consulta['CANTIDAD']; ?></td>
		                <td><?php echo $consulta['OBSERVACION']; ?></td>
		                <td><?php echo $consulta['ESTATUS']; ?></td>
	                </tr>
 <?php } ?>
                   
                   <!--------------->
                   
               </tbody>
               
               
           </table>
        
    </div>

  
   <!------------------------------------------------------------------------------------------------------------------------------------------------->
   
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>