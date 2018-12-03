<?php 
    include('Conexion.php');
    
    $conection=conectar();

    if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }else{
    
        $id = $_POST['usuario'];
        $pass = $_POST['contrasena'];
    
        if(existeUsuario($id) == 1){ // Existe el usuario 
            echo ("existe");
        }else{
            ?>
            
            <script>
            alert("Ingresa correctamente tu identificador o registrate");
            </script>
            <?php
            header('location: ../index.php');
        }
    
    
    }

    function existeUsuario($id){
        global $conection;
        $sql = "select count(id_usuario) as existe from usuario where id_usuario =" . $id;
        
        $resultado = $conection->query($sql);
        $dato = $resultado->fetch_assoc();
        
        return $resultado = $dato['existe'];
        
    }
?>