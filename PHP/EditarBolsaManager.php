<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
    $id=$_GET['ID'];
	$sueldo=$_POST['sueldo'];
	$descripcion=$_POST['descripcion'];

    $query="UPDATE BOLSA_TRABAJO SET SUELDO=".$sueldo.",DESCRIPCION='".$descripcion."' WHERE ID_BOLSA=".$id.";";
    echo $query;
    mysqli_query($conection,$query) or die (mysqli_error());
?>


<script>
    alert("Actualizacion exitosa!! ;D");
    window.location.href='../admin/establishments/promotions.php';
</script>