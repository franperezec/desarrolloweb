<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        require 'conexion.php';  // Asegúrate de tener configurada correctamente la conexión

        $cedula = $_GET['cedula'] ?? '';  // Asegúrate de validar y sanear este valor para seguridad

        if (!empty($cedula)) {
            $sql = "SELECT * FROM registros_conferencia WHERE cedula = ?";
            $stmt = mysqli_prepare($conexion, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 's', $cedula);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $registro = mysqli_fetch_assoc($result);

                if ($registro) {
                    echo "<h1>Editar Registro</h1>";
                    echo "<form action='actualizar_registro.php' method='post' class='mb-4'>";
                    echo "<input type='hidden' name='cedula_original' value='" . htmlspecialchars($cedula) . "'>";
                    foreach ($registro as $campo => $valor) {
                        echo "<div class='form-group'>";
                        echo "<label for='$campo'>" . ucfirst($campo) . ":</label>";
                        if ($campo === 'ocupacion') {
                            echo "<select name='ocupacion' class='form-control'>";
                            $options = ['Profesor', 'Estudiante', 'Otra'];
                            foreach ($options as $option) {
                                $selected = ($valor == $option) ? ' selected' : '';
                                echo "<option value='$option'$selected>$option</option>";
                            }
                            echo "</select>";
                        } else {
                            echo "<input type='text' id='$campo' name='$campo' value='" . htmlspecialchars($valor) . "' class='form-control'>";
                        }
                        echo "</div>";
                    }
                    echo "<button type='submit' class='btn btn-primary'>Actualizar</button>";
                    echo "</form>";
                } else {
                    echo "<div class='alert alert-warning'>Registro no encontrado.</div>";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "<div class='alert alert-danger'>Error al preparar la consulta: " . mysqli_error($conexion) . "</div>";
            }
        } else {
            echo "<div class='alert alert-info'>Cédula requerida para editar el registro.</div>";
        }

        mysqli_close($conexion);
        ?>
    </div>
</body>
</html>
