<?php

include "Soporte.php";

include "CintaVideo.php";

include "Dvd.php";

include "Juego.php";

// Instancia de la clase CintaVideo
$miCinta = new CintaVideo("Los cazafantasmas", 23, 3.5, "107 minutos");

// Accede a las propiedades y metodos de la clase CintaVideo
echo "<strong>" . $miCinta->getTitulo() . "</strong>";
echo "<br>Precio: " . $miCinta->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miCinta->getPrecioConIVA() . " euros";
$miCinta->muestraResumen();

echo "<br><br>";

// Instancia de la clase Dvd
$miDvd = new Dvd("Los cazafantasmas", 23, 3.5, "es,en", "16:9");

// Accede a las propiedades y metodos de la clase Dvd
echo "<br><strong>" . $miDvd->getTitulo() . "</strong>";
echo "<br>Precio: " . $miDvd->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miDvd->getPrecioConIVA() . " euros";
$miDvd->muestraResumen();

echo "<br><br>";

// Instancia de la clase Juego
$miJuego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);

// Accede a las propiedades y metodos de la clase Juego
echo "<strong>" . $miJuego->getTitulo() . "</strong>";
echo "<br>Precio: " . $miJuego->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miJuego->getPrecioConIVA() . " euros";
$miJuego->muestraResumen();

?>