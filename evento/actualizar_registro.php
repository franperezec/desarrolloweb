<?php
require 'conexion.php'; // Asegúrate de tener configurada correctamente la conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula_original = $_POST['cedula_original'];
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $ocupacion = $_POST['ocupacion'] ?? '';

    // Preparar la consulta SQL para actualizar los datos
    $sql = "UPDATE registros_conferencia SET nombre = ?, apellido = ?, email = ?, telefono = ?, ocupacion = ? WHERE cedula = ?";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'ssssss', $nombre, $apellido, $email, $telefono, $ocupacion, $cedula_original);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // Si los datos se actualizan correctamente, redirigir al usuario a ver_registro.php
            header("Location: ver_registro.php?cedula=" . urlencode($cedula_original));
            exit();
        } else {
            echo "No se encontró el registro o no pudo ser actualizado.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la actualización: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
} else {
    echo "Debe enviar el formulario mediante POST.";
}
?>

