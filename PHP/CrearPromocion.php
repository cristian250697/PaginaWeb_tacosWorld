<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
if($_FILES['imagen']['tmp_name'] != ""){

    $id=$_POST['idtaqueria'];
    $fechaini=$_POST['fechaini'];
    $fechafin=$_POST['fechafin'];
    $descripcion=$_POST['descripcion'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query="INSERT INTO PROMOCION (ID_TAQUERIA,FECHAINI,FECHAFIN,DESCRIPCION,IMAGEN) VALUES('$id','$fechaini','$fechafin','$descripcion','$imagen')";
    mysqli_query($conection,$query) or die (mysqli_error($conection));
}else{
    
    $id=$_POST['idtaqueria'];
    $fechaini=$_POST['fechaini'];
    $fechafin=$_POST['fechafin'];
    $descripcion=$_POST['descripcion'];

    $query="INSERT INTO PROMOCION ;";

    mysqli_query($conection,$query) or die (mysqli_error($conection));
}
?>


<script>
    alert("Actualizacion exitosa!! ;D");
    window.location.href='../manager/perfilGerente.php';
</script>