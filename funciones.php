<?php
    echo '<a href="index.html">Ir a la página principal</a>';
    //así creo un enlace dentro del PHP
    echo "<h1>"."Funciones PHP"."</h1>";

    function saludo() {
        echo "<h2>"."Saludo"."</h2>";
        echo date("d-m-Y H:i:s");
    }

    function saludar($nombre,$apellido) {
        echo "<h2>"."Saludo"."</h2>";
        echo "<h3>"."Mi nombre es: ".$nombre.$apellido."</h3>";
        echo date("d-m-Y H:i:s");
    }


    function sumar($a,$b) {
        echo "<h2>"."El resultado es"."</h2>";
       $r = $a + $b;
        echo "<h3>".$r."</h3>";
    }

    function multiplicar($a,$b) {
        echo "<h2>"."El resultado es"."</h2>";
       $r = $a * $b;
        echo "<h3>".$r."</h3>";
    }

    echo saludo();
    echo saludar("Francisco","Pérez");
    echo sumar(2,2);
    $num1 = 8;
    $num2 = 6;
    echo sumar($num1, $num2);
    echo multiplicar($num1, $num2);





?>