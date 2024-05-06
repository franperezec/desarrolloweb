<?php

require 'conexion.php';

$sql = "INSERT INTO personas(cedula, nombre, apellido, fecha_nacimiento) VALUES ('1718139822', 'Juan', 'Perez', '1986-05-17')";
echo $sql;
if(mysqli_query($conexion,$sql)) {
    echo "Persona creada";
}
else {
    echo "Error". mysqli_connect_error();
}

?>