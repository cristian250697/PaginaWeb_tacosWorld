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
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $pass=$_POST['pass'];
    $rol='GERENTE';
    $estatus=1;
        
    
    
    $query="INSERT INTO USUARIO(NOMBRE,APELLIDO,CORREO,PASS,TELEFONO,DIRECCION,ROL,ESTATUS) VALUES('".$name."','".$apellido."','".$email."','".$pass."',".$telefono.",'".$direccion."','".$rol."',".$estatus.");";
            
    
    mysqli_query($conection,$query) or die(mysqli_error($conection));
    
    }
    mysqli_close($conection);  
    header('location:../establishments/newTaqueria.html');
?>
