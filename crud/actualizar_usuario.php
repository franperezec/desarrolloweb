<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $rol = $_POST['rol'];

    if ($cedula && ($nombre || $apellido || $correo || $telefono || $rol)) {
        $cedula = mysqli_real_escape_string($conexion, $cedula);
        $nombre = $nombre ? mysqli_real_escape_string($conexion, $nombre) : null;
        $apellido = $apellido ? mysqli_real_escape_string($conexion, $apellido) : null;
        $correo = $correo ? mysqli_real_escape_string($conexion, $correo) : null;
        $telefono = $telefono ? mysqli_real_escape_string($conexion, $telefono) : null;
        $rol = $rol ? mysqli_real_escape_string($conexion, $rol) : null;

        $updates = [];
        if ($nombre) $updates[] = "nombre='$nombre'";
        if ($apellido) $updates[] = "apellido='$apellido'";
        if ($correo) $updates[] = "correo='$correo'";
        if ($telefono) $updates[] = "telefono='$telefono'";
        if ($rol) $updates[] = "rol='$rol'";

        $updateString = implode(", ", $updates);

        $sql = "UPDATE usuarios SET $updateString WHERE cedula='$cedula'";

        if (mysqli_query($conexion, $sql)) {
            echo "Usuario actualizado";
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    } else {
        echo "Cédula y al menos un campo a actualizar son obligatorios.";
    }
} else {
    echo "No se ha enviado ningún formulario.";
}

mysqli_close($conexion);
?>
