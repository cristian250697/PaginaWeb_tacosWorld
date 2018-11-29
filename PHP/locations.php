<?php

include_once('Conexion.php');
$conection=conectar();

if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "SELECT ALTITUD, LATITUD FROM TAQUERIA";

$posiciones = mysqli_query($conection,$sql) or die(mysqli_error($conection));


//$jsonPos = json_encode($posiciones);




  mysqli_close($conection);  
?>