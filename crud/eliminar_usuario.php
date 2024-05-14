<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['cedula'];

    if ($cedula) {
        $cedula = mysqli_real_escape_string($conexion, $cedula);

        $sql = "DELETE FROM usuarios WHERE cedula='$cedula'";

        if (mysqli_query($conexion, $sql)) {
            echo "Usuario eliminado";
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    } else {
        echo "Cédula es obligatoria.";
    }
} else {
    echo "No se ha enviado ningún formulario.";
}

mysqli_close($conexion);
?>
