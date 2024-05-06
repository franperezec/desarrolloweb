<?php
/**
 * Calculates the age based on the given birthdate.
 *
 * @param string $birthdate The birthdate in the format 'YYYY-MM-DD'.
 * @return int The calculated age.
 */
function calculateAge($birthdate) {
    $birthdate = new DateTime($birthdate);
    $today = new DateTime('today');
    $age = $birthdate->diff($today)->y;
    return $age;
}

$birthdate = $_POST['fecha_nacimiento']; // Obtener la fecha de nacimiento del formulario

$age = calculateAge($birthdate);

if ($age) {
    echo "<h2>Calcular Edad</h2>";
    echo "<p>Tu edad es: " . $age . " años.</p>";
} else {
    echo "No birthdate provided.";
}
?>
