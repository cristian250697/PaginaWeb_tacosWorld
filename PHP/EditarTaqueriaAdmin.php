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
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    //$imagen=$_POST[''];
    $descripcion=$_POST['descripcion'];

       if($_POST['activoB']){
        $estatusB=1;
    }else{
        $estatusB=0;
    }
   if($_POST['activoT']){
        $estatusT=1;
    }else{
        $estatusT=0;
    }

    $query="UPDATE TAQUERIA SET NOMBRE='".$nombre."', TELEFONO=".$telefono.",DIRECCION='".$direccion."',DESCRIPCION='".$descripcion."',ESTATUSBT=".$estatusB.",ESTATUS_SUCURSAL=".$estatusT." WHERE ID_TAQUERIA=".$id.";";
    echo $query;
    mysqli_query($conection,$query) or die (mysqli_error());
?>


<script>
    alert("Actualizacion exitosa!! ;D");
    window.location.href='../admin/establishments/taquerias.php';
</script>