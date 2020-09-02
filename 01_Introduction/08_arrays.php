<?php 

$arreglo = ['limón', 20.00, true];
$arreglo2 = array('limón', 20.00, true);

print_r($arreglo);
echo "<br>";
print_r($arreglo2);
echo "<br>";


$arreglo_asociativo = [
    'nombre' => 'limon',
    'precio' => 20.00,
    'promocion' => true,
    'cantidad' => 4
];

print_r($arreglo_asociativo['limon']);

$total = $arreglo_asociativo['cantidad'] * $arreglo_asociativo['precio'];
print_r($total);
