<?php

function conectar(){

$user="root";
$pass="";
$server="localhost";
$db="TACOSWORLD";
    
$conection= mysqli_connect($server,$user,$pass,$db) or die ("Error al conectar a la base de datos".mysqli_error());    

return $conection;
}
?>