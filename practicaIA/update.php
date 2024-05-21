<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];

    $sql = "UPDATE persona SET nombre='$nombre', apellido='$apellido', email='$email', edad='$edad' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    $sql = "SELECT * FROM persona WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $email = $row['email'];
    $edad = $row['edad'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Persona</title>
</head>
<body>
    <h2>Editar Persona</h2>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>" required><br>
        Apellido: <input type="text" name="apellido" value="<?php echo $apellido; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>" required><br>
        Edad: <input type="number" name="edad" value="<?php echo $edad; ?>" required><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
