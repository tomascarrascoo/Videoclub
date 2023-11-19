<?php

include "Soporte.php";

class Juego extends Soporte {
    private $consola;
    private $minNumJugadores;
    private $maxNumJugadores;

    // Constructor que sobrescribe al de la clase padre
    public function __construct($titulo, $codigo, $precio, $consola, $minNumJugadores, $maxNumJugadores) {
        parent::__construct($titulo, $codigo, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }

    // Sobrescribe el método muestraResumen
    public function muestraResumen() {
        parent::muestraResumen();
        echo "<br>Consola: " . $this->consola;
        $this->muestraJugadoresPosibles();
    }

    // Método específico de Juego para mostrar jugadores posibles
    public function muestraJugadoresPosibles() {
        if ($this->minNumJugadores == $this->maxNumJugadores) {
            echo "<br>Para " . $this->minNumJugadores . " jugador";
        } else {
            echo "<br>Para " . $this->minNumJugadores . " jugadores";
        }

        if ($this->minNumJugadores != $this->maxNumJugadores) {
            echo ", De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores";
        }
    }
}

?>