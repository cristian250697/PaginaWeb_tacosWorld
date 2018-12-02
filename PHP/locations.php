<?php

include_once('Conexion.php');
//function getArraySQL(){
$conection=conectar();

if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "SELECT LATITUD,LONGITUD,NOMBRE FROM TAQUERIA;";

$posiciones = mysqli_query($conection,$sql) or die(mysqli_error($conection));


$datos = array();
$i=0;

while($fila= mysqli_fetch_row($posiciones)){//mysqli_fetch_array

    $datos[$i] = $fila;
    $i++;
  
}


  mysqli_close($conection);
 //return $datos;   
//}

/*$misPosiciones = getArraySQL();
echo json_encode($misPosiciones);*/
?>