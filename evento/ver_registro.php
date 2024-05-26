<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Registro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        require 'conexion.php';

        $cedula = $_GET['cedula'] ?? '';
        if (!empty($cedula)) {
            $sql = "SELECT * FROM registros_conferencia WHERE cedula = ?";
            $stmt = mysqli_prepare($conexion, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 's', $cedula);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $registro = mysqli_fetch_assoc($result);

                if ($registro) {
                    echo "<h1 class='text-center'>Detalle del Registro</h1>";
                    echo "<table class='table table-striped'>";
                    echo "<thead class='thead-dark'><tr>";
                    foreach ($registro as $campo => $valor) {
                        echo "<th>" . htmlspecialchars(ucfirst($campo)) . "</th>";
                    }
                    echo "</tr></thead><tbody><tr>";
                    foreach ($registro as $valor) {
                        echo "<td>" . htmlspecialchars($valor) . "</td>";
                    }
                    echo "</tr></tbody></table>";
                    echo "<a href='editar_registro.php?cedula=" . htmlspecialchars($cedula) . "' class='btn btn-primary'>Editar</a>";
                    echo "<a href='eliminar_registro.php?cedula=" . htmlspecialchars($cedula) . "' class='btn btn-danger'>Eliminar</a>";
                    echo "<a href='#' onclick='finalizar()' class='btn btn-secondary'>Finalizar</a>";
                } else {
                    echo "<div class='alert alert-warning'>Registro no encontrado.</div>";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "<div class='alert alert-danger'>Error al preparar la consulta: " . mysqli_error($conexion) . "</div>";
            }
        } else {
            echo "<div class='alert alert-info'>Cédula requerida para mostrar el registro.</div>";
        }

        mysqli_close($conexion);
        ?>
    </div>

    <script>
        function finalizar() {
            alert('Registro realizado con éxito');
            window.location.href = 'index.html'; // Redirige a la página principal
        }
    </script>
</body>
</html>
