<?php
require 'conexion.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Rol</th>
                <th>Fecha de Registro</th>
            </tr>";
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
    echo "</table>";
} else {
    echo "0 resultados";
}

mysqli_close($conexion);
?>

