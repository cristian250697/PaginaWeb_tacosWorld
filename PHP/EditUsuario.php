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
       //Poner los nombres de todos los campos para verificar si estan vacios e inicializados
       ){
    
    $name=$_POST['name'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $pass=$_POST['pass'];
    $rol='USUARIO';
        
    
    
    $query="INSERT INTO USUARIO(NOMBRE,APELLIDO,CORREO,PASS,TELEFONO,DIRECCION,ROL) VALUES('".$name."','".$apellido."','".$email."','".$pass."',".$telefono.",'".$direccion."','".$rol."');";
            
    
    mysqli_query($conection,$query) or die(mysqli_error($conection));
    
    }
    mysqli_close($conection);  
    header('location:../index.php');
?>


