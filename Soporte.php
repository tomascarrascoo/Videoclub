<?php

// Clase abstracta Soporte
abstract class Soporte {
    private $titulo;
    private $codigo;
    private $precio;

    public function __construct($titulo, $codigo, $precio) {
        $this->titulo = $titulo;
        $this->codigo = $codigo;
        $this->precio = $precio;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    // Método abstracto que debe ser implementado por las clases hijas
    abstract public function muestraResumen();
}

// La principal ventaja de hacer que Soporte sea una clase abstracta es que 
// no se puede crear una instancia directa de Soporte, obligando a que las 
// instancias sean de las clases hijas que implementen el método muestraResumen.

?>
