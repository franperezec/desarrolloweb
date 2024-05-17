<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Lista de Usuarios</h1>
        <?php
        require 'conexion.php';

        $sql = "SELECT * FROM usuarios";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Rol</th>
                            <th>Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row["cedula"] . "</td>
                        <td>" . $row["nombre"] . "</td>
                        <td>" . $row["apellido"] . "</td>
                        <td>" . $row["correo"] . "</td>
                        <td>" . $row["telefono"] . "</td>
                        <td>" . $row["rol"] . "</td>
                        <td>" . $row["fecha_registro"] . "</td>
                    </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-warning'>No se encontraron resultados.</div>";
        }

       mysqli_close($conexion);
        ?>
    </div>
</body>
</html>


