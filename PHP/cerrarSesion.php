<?php
session_start();
$_SESSION['usuario'] = null;
session_unset();
if (session_destroy()) {
    echo "Sesión destruida correctamente";
} else {
    echo "Error al destruir la sesión";
}
?>

<script>
alert("¡Hasta pronto!");
    window.location.href='../index.php';
</script>

