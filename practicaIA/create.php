<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO persona (nombre, apellido, email, edad) VALUES ('$nombre', '$apellido', '$email', '$edad')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Persona</title>
</head>
<body>
    <h2>Crear Persona</h2>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required><br>
        Apellido: <input type="text" name="apellido" required><br>
        Email: <input type="email" name="email" required><br>
        Edad: <input type="number" name="edad" required><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>

