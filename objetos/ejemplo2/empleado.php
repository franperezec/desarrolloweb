<?php
    class Empleado {
        private $conn;
        private $table_name = "personas";

        public $id;
        public $cedula;
        public $nombre;
        public $apellido;
        public $fecha_nacimiento;

        public function __construct($db) {
            $this->conn = $db;
        }

        // Crear empleado
        function create() {
            $query = "INSERT INTO " . $this->table_name . " SET cedula=:cedula, nombre=:nombre, apellido=:apellido, fecha_nacimiento=:fecha_nacimiento";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(":cedula", $this->cedula);
            $stmt->bindParam(":nombre", $this->nombre);
            $stmt->bindParam(":apellido", $this->apellido);
            $stmt->bindParam(":fecha_nacimiento", $this->fecha_nacimiento);

            if($stmt->execute()) {
                return true;
            }
            return false;
        }

        // Leer empleados
        function read() {
            $query = "SELECT * FROM " . $this->table_name;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }

        // Eliminar empleado
        function delete() {
            $query = "DELETE FROM " . $this->table_name . " WHERE cedula = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $this->cedula);
            if($stmt->execute()) {
                return true;
            }
            return false;
        }
    }
?>