<?php
    // Incluir el archivo  la clase Persona
    include 'persona.php';

    // Crear un objeto de la clase Persona
    $persona1 = new Persona("Carlos", 20);

    // Llamar a los métodos del objeto
    $persona1->mostrarInformacion();
    $persona1->esMayorDeEdad();

    // Crear otro objeto de la clase Persona
    $persona2 = new Persona("Ana", 16);

    // Llamar a los métodos del objeto
    $persona2->mostrarInformacion();
    $persona2->esMayorDeEdad();

    // Crear otro objeto de la clase Persona
    $persona3 = new Persona("Juan", 18);

    // Llamar a los métodos del objeto
    $persona3->mostrarInformacion();
    $persona3->esMayorDeEdad();


?>