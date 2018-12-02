<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['comment'];
    $precio=$_POST['precio'];
    $estatus=$_POST['activo'];

    $query="UPDATE PRODUCTO SET NOMBRE='".$nombre."',DESCRIPCION='".$descripcion."',PRECIO=".$precio.",ESTATUS=".$precio." WHERE ID_PRODUCTO=".$id.";";
    echo $query;
    mysqli_query($conection,$query) or die (mysqli_error());
?>


<script>
    alert("Actualizacion exitosa!! ;D");
    window.location.href='../admin/establishments/products.php';
</script>