<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $rol = $_POST['rol']; // Default role is 'usuario'

    if ($cedula && $nombre && $apellido && $correo) {
        $cedula = mysqli_real_escape_string($conexion, $cedula);
        $nombre = mysqli_real_escape_string($conexion, $nombre);
        $apellido = mysqli_real_escape_string($conexion, $apellido);
        $correo = mysqli_real_escape_string($conexion, $correo);
        $telefono = mysqli_real_escape_string($conexion, $telefono);
        $rol = mysqli_real_escape_string($conexion, $rol);

        $sql = "INSERT INTO usuarios (cedula, nombre, apellido, correo, telefono, rol) VALUES ('$cedula', '$nombre', '$apellido', '$correo', '$telefono', '$rol')";

        if (mysqli_query($conexion, $sql)) {
            echo "Usuario creado";
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    } else {
        echo "Cédula, nombre, apellido y correo son obligatorios.";
    }
} else {
    echo "No se ha enviado ningún formulario.";
}

mysqli_close($conexion);
?>
