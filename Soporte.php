<?php

class Soporte {
    private $titulo;
    private $codigo;
    private $precio;

    // Propiedad privada y estatica para el IVA
    private static $IVA = 21;

    // Constructor
    public function __construct($titulo, $codigo, $precio) {
        $this->titulo = $titulo;
        $this->codigo = $codigo;
        $this->precio = $precio;
    }

    // Metodo para obtener el titulo
    public function getTitulo() {
        return $this->titulo;
    }

    // Metodo para obtener el precio
    public function getPrecio() {
        return $this->precio;
    }

    // Metodo para obtener el precio con IVA
    public function getPrecioConIVA() {
        // Calcula el precio con IVA
        $precioConIVA = $this->precio + ($this->precio * self::$IVA / 100);
        return $precioConIVA;
    }

    // Metodo para mostrar un resumen
    public function muestraResumen() {
        echo "<br>Resumen: " . $this->titulo . ", Código: " . $this->codigo;
    }
}

?>
