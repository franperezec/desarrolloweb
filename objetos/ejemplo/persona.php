<?php
    //Definir clase
    class Persona {
        
        // Definir propiedades de la clase persona
        
        public $nombre;
        public $edad;
        public $estatura;

        // Constructor para inicializar propiedades cuando se crea un objeto de la clase
        
        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        // Método para mostrar información de la persona
        public function mostrarInformacion() {
            echo "Nombre: " . $this->nombre . ", Edad: " . $this->edad . " años<br>";
        }

        // Método para verificar si la persona es mayor de edad
        
        public function esMayorDeEdad() {
            if($this->edad >= 18) {
                echo $this->nombre . " es mayor de edad.<br>";
            } else {
                echo $this->nombre . " no es mayor de edad.<br>";
            }
        }
    }
?>