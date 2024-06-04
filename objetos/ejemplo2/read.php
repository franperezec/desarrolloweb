<?php
    include_once 'database.php';
    include_once 'empleado.php';

    $database = new Database();
    $db = $database->getConnection();

    $empleado = new Empleado($db);
    $stmt = $empleado->read();
    $num = $stmt->rowCount();

    if($num > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Cédula</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Fecha de Nacimiento</th>";
        echo "</tr>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            echo "<tr>";
            echo "<td>{$cedula}</td>";
            echo "<td>{$nombre}</td>";
            echo "<td>{$apellido}</td>";
            echo "<td>{$fecha_nacimiento}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron empleados.";
    }
?>