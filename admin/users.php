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
        <a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="#"><img id= "logo" src="../images/logo.png" alt="tacosWorld"></a>
            <button style="background-color: red;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         
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
<center><h1 class="h1">Panel de administración de usuarios</h1></center>  
   <center>  
    <div class=" shadow-lg p-4 mb-5 bg-white rounded" style="height: 420px; width: 90%; overflow:auto;">
        <table class="table table-striped table-hover">
               <thead class="thead-dark">
                   <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Nombre</th>
                       <th scope="col">Apellido</th>
                       <th scope="col">Correo</th>
                       <th scope="col">Contraseña</th>
                       <th scope="col">Telefono</th>
                       <th scope="col">Dirección</th>
                       <th scope="col">Rol</th>
                       <th scope="col"><center>Herramientas</center></th>
                   </tr>
               </thead>
               <tbody>
                  <!-- CON PHP GENERAR FILAS -->
                   <?php
                        include('../PHP/Conexion.php');
                   
                        $conection=conectar();

                    if (!$conection) {
                        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                         exit;
                    }
                    $query="SELECT * FROM USUARIO";
                    $resultado=mysqli_query($conection,$query) or die(mysqli_error($conection));
                    
                      while($consulta =mysqli_fetch_array($resultado)){ ?>
                      
                      <tr>
		                <td><?php echo $consulta['ID_USUARIO']; ?></td>
		                <td><?php echo $consulta['NOMBRE']; ?></td>
		                <td><?php echo $consulta['APELLIDO']; ?></td>
		                <td><?php echo $consulta['CORREO']; ?></td>
		                <td><?php echo $consulta['PASS']; ?></td>
                        <td><?php echo $consulta['TELEFONO']; ?></td>
                        <td><?php echo $consulta['DIRECCION']; ?></td>
                        <td><?php echo $consulta['ROL']; ?></td>
	                    <td>
                            <center>
                              <a href="../PHP/EditarUsuarioAdmin.php?ID=<?php echo $consulta['ID_USUARIO']; ?>">
                               <button class="btn btn-warning">Editar</button>
                               </a>
                            </center>
                       
                            <center>
                              <a href="../PHP/EliminarUsuarioAdmin.php?ID=<?php echo $consulta['ID_USUARIO']; ?>">
                               <button class="btn btn-danger">Eliminar</button>
                               </a>
                            </center>
                       </td>
                    </tr>
                     <?php } ?>
                   
                   <!--------------->
                   
               </tbody>
               
               
           </table>
        
    </div>

  </center>
   <!------------------------------------------------------------------------------------------------------------------------------------------------->
   
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>