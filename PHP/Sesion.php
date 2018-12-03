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
    
        if(existeUsuario($id) == 1){            // Existe el usuario 
            if(validaContraseña($id) === $pass){ // La contraseña es correcta
                if(estadoUsuario($id) == 1){    // El usuario esta activo
                    $usuario = tipoUsuario($id);
                    $nombre = nombreUsuario($id);
                    
                    session_start();
                    $_SESSION['usuario'] = $id;
                    
                    if($usuario == 'USUARIO'){
                        ?>
                        <script>
                            alert("Usuario \n Bienvenido <?php echo $nombre;?>");
                            window.location.href='../user/perfilUsuario.php?ID='<? echo $id?>;                
                        </script>
                        <?php  
                    }elseif($usuario == 'ADMINISTRADOR'){
                        ?>
                        <script>
                            alert("Administrador \n Bienvenido <?php echo $nombre;?>");
                            window.location.href='../admin/perfil.php?ID='<? echo $id?>;     
                        </script>
                        <?php  
                    }elseif($usuario == 'GERENTE'){
                        ?>
                        <script>
                            alert("Gerente \n Bienvenido <?php echo $nombre;?>");
                            window.location.href='../manager/perfilGerente.php?ID='<? echo $id?>;                    
                        </script>
                        <?php  
                    }
                }else{
                    ?>
                <script>
                    alert("Este usuario está dado de baja, por favor contacta a un administrador.");
                    window.location.href='../index.php';                
                </script>
            <?php  
                }
            }else{
                ?>
                <script>
                    alert("Contraseña incorrecta");
                    window.location.href='../index.php';                
                </script>
            <?php    
            }
        }else{
            ?>
            <script>
            alert("Ingresa correctamente tu identificador o registrate");
            window.location.href='../index.php';                
            </script>
            <?php
        }
    
    
    }

    function existeUsuario($id){
        global $conection;
        $sql = "select count(id_usuario) as existe from usuario where id_usuario =" . $id;
        
        $resultado = $conection->query($sql);
        $dato = $resultado->fetch_assoc();
        
        return $resultado = $dato['existe'];
        
    }

    function validaContraseña($id){
        global $conection;
        $sql = 'select pass from usuario where id_usuario =' .$id;
        $resultado = $conection->query($sql);
        $dato = $resultado->fetch_assoc();
        
        return $resultado = $dato['pass'];
        
    }

    function estadoUsuario($id){
        global $conection;
        $sql = 'select estatus from usuario where id_usuario =' .$id;
        $resultado = $conection->query($sql);
        $dato = $resultado->fetch_assoc();
        
        return $resultado = $dato['estatus'];
    }

    function tipoUsuario($id){
        global $conection;
        $sql = 'select rol from usuario where id_usuario =' .$id;
        $resultado = $conection->query($sql);
        $dato = $resultado->fetch_assoc();
        
        return $resultado = $dato['rol'];
    }

    function nombreUsuario($id){
        global $conection;
        $sql = 'select nombre from usuario where id_usuario =' .$id;
        $resultado = $conection->query($sql);
        $dato = $resultado->fetch_assoc();
        
        return $resultado = $dato['nombre'];
    }

?>