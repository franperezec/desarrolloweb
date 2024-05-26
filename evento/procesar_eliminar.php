<?php
require 'conexion.php'; // Asegúrate de que este archivo contiene la información correcta para conectar a tu base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['cedula'] ?? '';

    if (!empty($cedula)) {
        // Preparar la consulta SQL para eliminar el registro
        $sql = "DELETE FROM registros_conferencia WHERE cedula = ?";
        $stmt = mysqli_prepare($conexion, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $cedula);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<script>alert('Registro eliminado con éxito');</script>";
                echo "<script>window.location.href = 'index.html';</script>"; // Redirige a index.html después de mostrar el mensaje
            } else {
                echo "No se encontró el registro o no pudo ser eliminado.";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error al preparar la consulta: " . mysqli_error($conexion);
        }
    } else {
        echo "Cédula requerida para eliminar el registro.";
    }

    mysqli_close($conexion);
} else {
    echo "Debe enviar el formulario mediante POST.";
}
?>

