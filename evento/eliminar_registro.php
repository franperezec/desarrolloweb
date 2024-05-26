<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        require 'conexion.php'; // Asegúrate de que este archivo tiene la información correcta para conectar a tu base de datos

        $cedula = $_GET['cedula'] ?? ''; // Asegúrate de validar y sanear este valor para seguridad

        if (!empty($cedula)) {
            echo "<h1 class='mb-4'>Eliminar Registro</h1>";
            echo "<p class='lead'>¿Está seguro de que desea eliminar el registro con cédula: " . htmlspecialchars($cedula) . "?</p>";
            echo "<form action='procesar_eliminar.php' method='post' class='mb-3'>";
            echo "<input type='hidden' name='cedula' value='" . htmlspecialchars($cedula) . "'>";
            echo "<button type='submit' class='btn btn-danger'>Eliminar</button>";
            echo "<a href='ver_registro.php?cedula=" . htmlspecialchars($cedula) . "' class='btn btn-secondary ml-2'>Cancelar</a>"; // Botón para cancelar la acción
            echo "</form>";
        } else {
            echo "<div class='alert alert-warning'>Cédula requerida para eliminar el registro.</div>";
        }

        mysqli_close($conexion);
        ?>
    </div>
</body>
</html>
