<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
    $descripcion=$_POST['comment'];
    $sueldo=$_POST['sueldo'];
    $id_b=$_GET['ID'];
    

    $query="UPDATE BOLSA_TRABAJO SET DESCRIPCION='".$descripcion."',SUELDO=".$sueldo." WHERE ID_BOLSA=".$id_b.";";
    echo $query;
    mysqli_query($conection,$query) or die (mysqli_error());
?>


<script>
    alert("Actualizacion exitosa!! ;D");
    window.location.href='../admin/establishments/job.php';
</script>
