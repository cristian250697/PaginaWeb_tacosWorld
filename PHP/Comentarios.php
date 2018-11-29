<?php
include('Conexion.php');
$conection=conectar();

if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

    if(isset($_POST['name'])     && !empty($_POST['name'])     &&
       isset($_POST['email'])    && !empty($_POST['email'])    &&
       isset($_POST['comment'])      && !empty($_POST['comment'])  
       ){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $fecha_actual=date("d/m/Y");
    
    
    
    $query="INSERT INTO COMENTARIOSG(NOMBRE,CORREO,COMENTARIO,FECHA) VALUES('".$name."','".$email."','".$comment."','".$fecha_actual."');";
    
    mysqli_query($conection,$query);
    
    }
    mysqli_close($conection);  
    include('../comment.html')
?>