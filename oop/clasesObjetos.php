<?php 
    // Clase
    class Jugador {
        // Propiedas de una clase
        public $nombre;
        public $posicion;
        public $numero;

        // Constructor
        public function __construct($nombre, $posicion, $numero) {
            $this->nombre = $nombre;
            $this->posicion = $posicion;
            $this->numero = $numero;
        }

        // Metodos de una clase
        public function entrenar() {
            echo $this->nombre." esta entrenando.";
        }

        public function jugar() {
            echo $this->nombre." esta jugando.";            
        }
    }

    // Instancias de una clase
    $jugador1 = new Jugador("Cristiano Ronaldo", "Adelantero", 7);
    // $jugador1->nombre = "Cristiano Ronaldo";
    // $jugador1->posicion = "Adelantero";
    // $jugador1->numero = 7;
    $jugador1->entrenar();
    echo "<br>";
    $jugador1->jugar();

    echo '<pre>';
    var_dump($jugador1);
    echo '</pre>';

    $jugador2 = new Jugador("Gianluigi Buffon", "Arquero", 1);
    // $jugador2->nombre = "Gianluigi Buffon";
    // $jugador2->posicion = "Arquero";
    // $jugador2->numero = 1;
    $jugador2->entrenar();
    echo "<br>";
    $jugador2->jugar();

    echo '<pre>';
    var_dump($jugador2);
    echo '</pre>';
?>