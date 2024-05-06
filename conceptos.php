<?php
//phpinfo();
/* Con este ejemplo vemos la configuración del intérprete de PHP, podemos
comprobar qué parámetros tenemos activados o desactivados y, si
disponemos de algún conocimiento, podremos modificar alguno de estos
parámetros, al igual que hemos hecho anteriormente en los ficheros de
configuración.
Como podemos comprobar, esta forma de incluir comentarios es más correcta,
ya que al utilizar varias líneas es más eficaz que el ejemplo anterior.
*/

echo "<h1>Hola Mundo en PHP</h1><br>";

echo "<h2>Variables</h2><br>";

$nombre = "Francisco";
$_edad = 25;

echo "Mi nombre es: ".$nombre." y mi edad es: ".$_edad."<br>";

echo "<h2>Operadores de comparación</h2><br>";
$num1 = 5;
$num2 = 6;

echo "Estructura Control IF<br>";
if ($num1 > $num2) {
    echo "Número 1 es mayor<br>";
} else {
    echo "Número 1 es menor<br>";
}

echo "<h2>Operaciones Matemáticas</h2><br>";
echo "Suma: " . ($num1 + $num2) . "<br>";
echo "Multiplicación: " . ($num1 * $num2) . "<br>";

echo "<h2>Estructura Control WHILE</h2>";
$n = 1;
while ($n <= 5) {
    echo "Hoy es Lunes<br>";
    $n++;
}
//hace una vez do por lo menos y luego while DO WHILE
echo "<h2>Estructura Control DO WHILE</h2>";
$contador = 6;
do {
    echo "Hoy es Lunes<br>";
    $contador++;
} while ($contador <= 5);

echo "<h2>Estructura Control FOR</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "Hoy es Lunes<br>";
}

echo "<h2>Estructura Control IF ELSE</h2>";

$age = 18;

// If-else statement
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

echo "<h2>Estructura Control SWITCH </h2>";

$dayNumber = 1;

// Switch statement
switch ($dayNumber) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day number";
}

echo "<h2>Estructura Control FOREACH </h2>";
$fruits = array("apple", "banana", "orange");

// Foreach loop
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}
/*El foreach es útil cuando deseas recorrer todos los elementos de un array y realizar alguna 
acción con cada uno de ellos, sin necesidad de utilizar un contador o un índice explícito.*/

?>
<a href="index.html">Ir a la página principal</a> <!-- Esto es un comentario en HTML poner enlace po fuera del PHP -->
