<?php

function conectar(){

$user="root";
$pass="";
$server="localhost";
$db="TACOSWORLD";
    
$conection= mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar a la base de datos".mysqli_error());    
mysqli_set_charset($conection,"utf8"); //Establece el conjunto de caracteres predeterminado a usar cuando se envían datos desde y hacia el servidor de la base de datos.
return $conection;
}
?>