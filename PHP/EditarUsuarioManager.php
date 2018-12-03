<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
    $id=$_POST['id'];
    $nombre=$_POST['name'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['email'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $pass=$_POST['pass'];
    

    $query="UPDATE USUARIO SET NOMBRE='".$nombre."',APELLIDO='".$apellido."',CORREO='".$correo."',DIRECCION='".$direccion."',TELEFONO=".$telefono.",PASS='".$pass."' WHERE ID_USUARIO=".$id.";";
    echo $query;
    mysqli_query($conection,$query) or die (mysqli_error());
?>


<script>
    alert("Actualizacion exitosa!! ;D");
    window.location.href='../manager/perfilGerente.php';
</script>
