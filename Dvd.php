<?php

include "Soporte.php";

class Dvd extends Soporte {
    private $idiomas;
    private $formatoPantalla;

    // Constructor que sobrescribe al de la clase padre
    public function __construct($titulo, $codigo, $precio, $idiomas, $formatoPantalla) {
        parent::__construct($titulo, $codigo, $precio);
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
    }

    // Sobrescribe el metodo muestraResumen
    public function muestraResumen() {
        parent::muestraResumen();
        echo "<br>Idiomas: " . $this->idiomas;
        echo "<br>Formato de Pantalla: " . $this->formatoPantalla;
    }
}

?>
