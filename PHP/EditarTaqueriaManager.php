<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
if($_FILES['imagen']['tmp_name'] != "" ){
    
     $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
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

     $query= "UPDATE TAQUERIA SET NOMBRE= '$nombre',TELEFONO ='$telefono',DIRECCION= '$direccion',DESCRIPCION= '$descripcion', ESTATUSBT='$estatusB',ESTATUS_SUCURSAL='$estatusT', IMAGEN = '$imagen' WHERE ID_TAQUERIA= '$id' ;";
    mysqli_query($conection,$query) or die (mysqli_error($conection));
     
}else{

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];

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

    $query= "UPDATE TAQUERIA SET NOMBRE= '$nombre',TELEFONO ='$telefono',DIRECCION= '$direccion',DESCRIPCiON= '$descripcion', ESTATUSBT='$estatusB',ESTATUS_SUCURSAL='$estatusT' WHERE ID_TAQUERIA= '$id' ;";
    mysqli_query($conection,$query) or die (mysqli_error($conection));
}
?>


<script>
    alert("Actualizacion exitosa!! ;D");
    window.location.href='../manager/perfilGerente.php';
</script>