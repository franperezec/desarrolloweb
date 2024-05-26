<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "empleados";

// Create a connection
$conexion = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

// Uncomment the line below if you want to see a connection success message
echo "Connected successfully"; 

?>
