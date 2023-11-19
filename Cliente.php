<?php

class Cliente {
    private $nombre;
    private $numero;
    private $maxAlquilerConcurrente;
    private $numSoportesAlquilados = 0;
    private $soportesAlquilados = [];

    // Constructor
    public function __construct($nombre, $numero, $maxAlquilerConcurrente = 3) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    // Getter y setter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    // Getter y setter para numero
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    // Getter para numSoportesAlquilados
    public function getNumSoportesAlquilados() {
        return $this->numSoportesAlquilados;
    }

    // Metodo muestraResumen
    public function muestraResumen() {
        echo "Cliente: " . $this->nombre;
        echo "<br>Cantidad de alquileres: " . count($this->soportesAlquilados);
    }

    // Operacion tieneAlquilado
    public function tieneAlquilado($s) {
        foreach ($this->soportesAlquilados as $soporte) {
            if ($soporte === $s) {
                return true;
            }
        }
        return false;
    }

    // Operacion alquilar
    public function alquilar($s) {
        if ($this->tieneAlquilado($s)) {
            echo "Error: El soporte ya está alquilado por este cliente.";
            return false;
        }

        if ($this->numSoportesAlquilados >= $this->maxAlquilerConcurrente) {
            echo "Error: Se ha alcanzado el límite de alquileres.";
            return false;
        }

        $this->soportesAlquilados[] = $s;
        $this->numSoportesAlquilados++;
        echo "El soporte ha sido alquilado con éxito.";
        return true;
    }

    // Operacion devolver
    public function devolver($numSoporte) {
        if (isset($this->soportesAlquilados[$numSoporte])) {
            unset($this->soportesAlquilados[$numSoporte]);
            $this->numSoportesAlquilados--;
            echo "El soporte ha sido devuelto con éxito.";
            return true;
        } else {
            echo "Error: El soporte no estaba alquilado.";
            return false;
        }
    }

    // Operacion listarAlquileres
    public function listarAlquileres() {
        echo "El cliente tiene " . count($this->soportesAlquilados) . " alquiler(es).";
        echo "<br>Lista de alquileres:";
        foreach ($this->soportesAlquilados as $key => $soporte) {
            echo "<br>($key) " . $soporte->getTitulo();
        }
    }
}

?>
