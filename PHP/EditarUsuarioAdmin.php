<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
    $query="UPDATE USUARIO SET NOMBRE='',APELLIDO='',PASS='',TELEFONO=3,DIRECCION='',ROL='' WHERE CORREO='';";

    mysqli_query($conection,$query) or die (mysqli_error());
?>


<script>
    alert("Eliminacion exitosa ;D");
    window.location.href='../admin/comments.php';
</script>
