<?php

include_once "Videoclub.php"; // No incluimos nada mas

$vc = new Videoclub("Severo 8A");

// Voy a incluir unos cuantos soportes de prueba
$vc->incluirJuego("God of War", 19.99, "PS4", 1, 1);
$vc->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
$vc->incluirDvd("Torrente", 4.5, "es","16:9");
$vc->incluirDvd("Origen", 4.5, "es,en,fr", "16:9");
$vc->incluirDvd("El Imperio Contraataca", 3, "es,en","16:9");
$vc->incluirCintaVideo("Los cazafantasmas", 3.5, 107);
$vc->incluirCintaVideo("El nombre de la Rosa", 1.5, 140);

// Listo los productos
$vc->listarProductos();

// Voy a crear algunos socios
$vc->incluirSocio("Amancio Ortega");
$vc->incluirSocio("Pablo Picasso", 2);

$vc->alquilarSocioProducto(1,2);
$vc->alquilarSocioProducto(1,3);
// Alquilo otra vez el soporte 2 al socio 1
// No debe dejarme porque ya lo tiene alquilado
$vc->alquilarSocioProducto(1,2);
// Alquilo el soporte 6 al socio 1
// No se puede porque el socio 1 tiene 2 alquileres como maximo
$vc->alquilarSocioProducto(1,6);

// Listo los socios
$vc->listarSocios();

?>