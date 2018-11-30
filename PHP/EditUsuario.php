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
       isset($_POST['apellido'])    && !empty($_POST['apellido'])    &&
       isset($_POST['email'])  && !empty($_POST['email'])  &&
       isset($_POST['direccion'])    && !empty($_POST['direccion'])    &&
       isset($_POST['telefono'])    && !empty($_POST['telefono'])    &&
       isset($_POST['pass'])    && !empty($_POST['pass'])                             
       ){
    
    $name=$_POST['name'];
    $apellido=$_POST['apellido'];
    $pass=$_POST['pass'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $rol='USUARIO';
        
    
    
    $query="UPDATE USUARIO SET NOMBRE='".$name."',APELLIDO='".$apellido."',PASS='".$pass."',TELEFONO=".$telefono.",DIRECCION='".$direccion."',ROL='".$rol."' WHERE CORREO='".$email."';";
            
    
    mysqli_query($conection,$query) or die(mysqli_error($conection));
    
    }
    mysqli_close($conection);  
    header('location:../index.php');
?>


