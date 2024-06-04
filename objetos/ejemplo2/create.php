<?php
    include_once 'database.php';
    include_once 'empleado.php';

    $database = new Database();
    $db = $database->getConnection();

    $empleado = new Empleado($db);

    $empleado->cedula = $_POST['cedula'];
    $empleado->nombre = $_POST['nombre'];
    $empleado->apellido = $_POST['apellido'];
    $empleado->fecha_nacimiento = $_POST['fecha_nacimiento'];

    if($empleado->create()) {
        echo "Empleado creado con éxito.";
    } else {
        echo "No se pudo crear el empleado.";
    }
?>