<?php

include "Soporte.php";

class CintaVideo extends Soporte {
    private $duracion;

    // Constructor que sobrescribe al de la clase padre
    public function __construct($titulo, $codigo, $precio, $duracion) {
        parent::__construct($titulo, $codigo, $precio);
        $this->duracion = $duracion;
    }

    // Sobrescribe el metodo muestraResumen
    public function muestraResumen() {
        parent::muestraResumen();
        echo "<br>Duración: " . $this->duracion;
    }
}

?>
