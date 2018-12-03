<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
    $query="DELETE FROM COMENTARIOSG WHERE ID_COMENTARIOSG=".$_GET['ID'].";";
	$sesion=$_GET['sesion'];

    mysqli_query($conection,$query) or die (mysqli_error());

	include('');
?>


