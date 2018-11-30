<?php 
$consulta=consultaPersona($_GET['ID']);

function consultaPersona($id){
    include('Conexion.php');
    $conection=conectar();
    
    $query="SELECT * FROM EMPLEADO WHERE ID='".$id."';";
    $resultado=mysqli_query($conection,$query);
    $filas=mysqli_fetch_array($resultado) or die (mysqli_error());
    return [$filas['FECHA'],
            $filas['NOMBRE'],
            $filas['DIRECCION'],
            $filas['CORREO'],
            $filas['FECHA_NACIMIENTO'],
            $filas['NUMERO_TELEFONICOT'],
            $filas['NUMERO_TELEFONICO'],
            $filas['ESTADO_CIVIL']];
}

?>