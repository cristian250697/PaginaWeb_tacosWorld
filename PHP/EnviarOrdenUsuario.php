<?php
include('Conexion.php');
$conection=conectar();

if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
    $taqueria=$_GET['IDT'];
    $usuario=$_GET['IDU'];
    $producto=$_POST['producto'];
    $cantidad=$_POST['cantidad'];
    $observacion=$_POST['descripcion'];
    
    $query="INSERT INTO PEDIDOS(ID_TAQUERIA,ID_USUARIO,ID_PRODUCTO,CANTIDAD,OBSERVACION,ESTATUS) VALUES(".$taqueria.",".$usuario.",".$producto.",".$cantidad.",'".$observacion."',0);";
    
    mysqli_query($conection,$query) or die(mysqli_error($conection));
    
    
?>


<script>
    window.location.href='../index.php';
    alert("Se ha echo tu pedido");
</script>