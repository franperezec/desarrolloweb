<?php
// Incluye el archivo de conexión a la base de datos
require 'conexion.php';

// Verifica si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los datos del formulario
    // Utiliza el operador de fusión nula (??) para manejar el caso donde alguna variable no esté definida
    // Si la variable no está definida en $_POST, se asigna null
    // $cedula = $_POST['cedula'] ?? null;
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    // Verifica si todos los campos del formulario han sido proporcionados
    if ($cedula && $nombre && $apellido && $fecha_nacimiento) {
        // Escapa los datos del formulario para evitar inyecciones SQL
        $cedula = mysqli_real_escape_string($conexion, $cedula);
        $nombre = mysqli_real_escape_string($conexion, $nombre);
        $apellido = mysqli_real_escape_string($conexion, $apellido);
        $fecha_nacimiento = mysqli_real_escape_string($conexion, $fecha_nacimiento);

        // Construye la sentencia SQL para insertar los datos en la base de datos
        $sql = "INSERT INTO personas (cedula, nombre, apellido, fecha_nacimiento) VALUES ('$cedula', '$nombre', '$apellido', '$fecha_nacimiento')";

        // Ejecuta la sentencia SQL
        if (mysqli_query($conexion, $sql)) {
            // Si la consulta se ejecuta correctamente, muestra un mensaje de éxito
            echo "Persona creada";
        } else {
            // Si ocurre un error al ejecutar la consulta, muestra un mensaje de error con los detalles del error
            echo "Error: " . mysqli_error($conexion);
        }
    } else {
        // Si no se proporcionaron todos los campos del formulario, muestra un mensaje de error
        echo "Todos los campos son obligatorios.";
    }
} else {
    // Si el formulario no ha sido enviado, muestra un mensaje de error
    echo "No se ha enviado ningún formulario.";
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
