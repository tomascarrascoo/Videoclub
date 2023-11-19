<?php

include_once "Soporte.php";
include_once "Cliente.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";

class Videoclub {
    private $nombre;
    private $productos = [];
    private $socios = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function incluirJuego($titulo, $precio, $consola, $minNumJugadores, $maxNumJugadores) {
        $juego = new Juego($titulo, count($this->productos) + 1, $precio, $consola, $minNumJugadores, $maxNumJugadores);
        $this->productos[] = $juego;
        echo "Juego incluido con éxito.";
    }

    public function incluirDvd($titulo, $precio, $idiomas, $formatoPantalla) {
        $dvd = new Dvd($titulo, count($this->productos) + 1, $precio, $idiomas, $formatoPantalla);
        $this->productos[] = $dvd;
        echo "DVD incluido con éxito.";
    }

    public function incluirCintaVideo($titulo, $precio, $duracion) {
        $cintaVideo = new CintaVideo($titulo, count($this->productos) + 1, $precio, $duracion);
        $this->productos[] = $cintaVideo;
        echo "Cinta de video incluida con éxito.";
    }

    public function incluirSocio($nombre, $maxAlquilerConcurrente = 3) {
        $socio = new Cliente($nombre, count($this->socios) + 1, $maxAlquilerConcurrente);
        $this->socios[] = $socio;
        echo "Socio incluido con éxito.";
    }

    public function listarProductos() {
        echo "Lista de productos:";
        foreach ($this->productos as $key => $producto) {
            echo "<br>($key) ";
            echo $producto->getTitulo();
        }
    }

    public function listarSocios() {
        echo "Lista de socios:";
        foreach ($this->socios as $key => $socio) {
            echo "<br>($key) ";
            echo $socio->getNombre();
        }
    }

    public function alquilarSocioProducto($numSocio, $numProducto) {
        if (isset($this->socios[$numSocio]) && isset($this->productos[$numProducto])) {
            $socio = $this->socios[$numSocio];
            $producto = $this->productos[$numProducto];

            if ($socio->alquilar($producto)) {
                echo "<br>Alquiler realizado con éxito.";
            } else {
                echo "<br>Error al alquilar el producto.";
            }
        } else {
            echo "<br>Error: Socio o producto no encontrado.";
        }
    }
}

?>