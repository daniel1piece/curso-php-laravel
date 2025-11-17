<?php
    // Modificadores De Acceso
    // 1- Public - se puede acceder desde cualquier objeto o clase.
    // 2- Protected - Se puede acceder unicamente en la clase
    // 3- Private - se puede acceder unicamente por la clase que lo contiene

    // Clase Padre
    class SeleccionFutbol {
        // Propiedades de una clase
        private $id;
        private $nombre;
        private $edad;

        // Metodos de una clase
        public function __construct($id, $nombre, $edad)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function getNombre() {
            return $this->nombre."<br>";
        }

        public function getId() {
            return $this->id."<br>";
        }

        public function getEdad() {
            return $this->edad."<br>";
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setEdad($edad) {
            $this->edad = $edad;
        }

        public function concentrarse() {
            echo $this->nombre . " esta en concentracion.<br>";
        }

        public function viajar() {
            echo $this->nombre . " esta vijando.<br>";
        }

    }
    // Clase hija
    class Jugador extends SeleccionFutbol {       
        public $posicion;
        public $numero;

        public function __construct($id, $nombre, $edad, $posicion, $numero)
        {
            parent::__construct($id, $nombre, $edad);
            $this->posicion = $posicion;
            $this->numero = $numero;
            
        }

        public function entrenar() {
            echo $this->nombre . " esta entrenando.<br>";
        }

        public function jugar() {
            echo $this->nombre . " esta jugando.<br>";
        }
    }
    // Clase hija
    class Entrenador extends SeleccionFutbol {
        public $experiencia;

        public function __construct($id, $nombre, $edad, $experiencia)
        {
            parent::__construct($id, $nombre, $edad);
            $this->experiencia = $experiencia;
        }

        public function dirigirEntrenamiento() {
            echo $this->nombre . " esta dirigiendo el entrenamineto.<br>";
        }

        public function dirigirPartido() {
            echo $this->nombre . " esta dirigiendo el partido<br>";
        }
    }

    $jugador1 = new Jugador(123, "Cristiano", 37,"Delantero", 7);
    $entrenador1 = new Entrenador("345", "Carleto", 65, 10);
    // echo $jugador1->concentrarse();
    // echo $jugador1->viajar();
    // echo $entrenador1->dirigirPartido();
    echo $jugador1->getNombre(); // Cristiano
    $jugador1->setNombre("Leonel Messi"); // Actualizar
    echo $jugador1->getNombre(); // Leonel Messi

?>