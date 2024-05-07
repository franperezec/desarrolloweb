<?php
require 'conexion.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
}
$sql = "INSERT INTO personas(cedula, nombre, apellido, fecha_nacimiento) VALUES ('$cedula', '$nombre', '$apellido', '$fecha_nacimiento')";

if(mysqli_query($conexion,$sql)) {
    echo "Persona creada";
}
else {
    echo "Error". mysqli_connect_error();
}
mysqli_close($conexion);
?>