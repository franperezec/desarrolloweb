<?php
include 'db.php';

$sql = "SELECT id, nombre, apellido, email, edad FROM persona";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Personas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2 class="mt-5">Lista de Personas</h2>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['apellido']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['edad']}</td>
                        <td>
                            <a href='update.php?id={$row['id']}'>Editar</a>
                            <a href='delete.php?id={$row['id']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No hay registros</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>
</body>
</html>
