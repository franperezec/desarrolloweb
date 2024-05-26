<?php
require 'conexion.php'; // Asegúrate de tener este archivo correctamente configurado para conectarte a tu base de datos

// Verificar si el formulario ha sido enviado usando el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recolectar datos del formulario
    $cedula = $_POST['cedula'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $ocupacion = $_POST['ocupacion'] ?? '';

    // Preparar la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO registros_conferencia (cedula, nombre, apellido, email, telefono, ocupacion) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
        // Vincular los parámetros para la consulta SQL
        mysqli_stmt_bind_param($stmt, 'ssssss', $cedula, $nombre, $apellido, $email, $telefono, $ocupacion);
        
        // Ejecutar la consulta preparada
        if (mysqli_stmt_execute($stmt)) {
            // Redirigir al usuario a ver_registro.php con la cédula como parámetro
            header("Location: ver_registro.php?cedula=" . urlencode($cedula));
            exit();
        } else {
            echo "Error al insertar el registro: " . mysqli_error($conexion);
        }

        // Cerrar la declaración preparada
        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la consulta: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "Debe enviar el formulario mediante POST.";
}
?>
