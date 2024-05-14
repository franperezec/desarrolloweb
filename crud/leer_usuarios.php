<?php
require 'conexion.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Cédula: " . $row["cedula"]. " - Nombre: " . $row["nombre"]. " - Apellido: " . $row["apellido"]. " - Correo: " . $row["correo"]. " - Teléfono: " . $row["telefono"]. " - Rol: " . $row["rol"]. " - Fecha de Registro: " . $row["fecha_registro"]. "<br>";
    }
} else {
    echo "0 resultados";
}

mysqli_close($conexion);
?>
