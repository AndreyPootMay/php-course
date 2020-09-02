<?php 

// Numéricos
$numerico = 20;
$doble = 5.5;

// Cadenas de caracteres
$nombre = "Niger Andrey Poot May";
$nombre2 = 'Niger Andrey Poot May con comillas simples';
$nombre3 = "Linea 1 <br> Linea 2"; // Escape \n

// Booleanos - True/False || 1/0.
$registrado = true;
$durmiendo = false;
$sentado = 1;
$parado = 0;

// Null
$vacio = null;
$noVacio = 20;


echo "<p>" . $numerico . "</p><br>";
echo $doble . "<br>";

echo $nombre . "<br>";
echo $nombre2 . "<br>";
echo $nombre3 . "<br>";

echo $registrado . "<br>";
echo $durmiendo . "<br>";
echo $sentado . "<br>";
echo $parado . "<br>";

// Comprobando si la variable está realmente vacía.
if (is_null($vacio)) {
    echo 'La variable está vacía';
    echo $vacio; // No imprime nada
}