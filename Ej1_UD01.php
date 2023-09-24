

<!-- 1. Ejercicio 1

Dada una serie de números, dividirla en dos series diferentes: una con los números más grandes y
otra con los números más pequeños.
Por ejemplo:

Serie: 1, 5 ,8,40, 100, -3, 2.5, 3000
Salida
-------
Pequeños: -3, 1, 2.5, 5
Grandes: 8, 40, 100, 3000
Puedes representar la serie como una constante, no hace falta que el programa lea los datos. No
importa el orden en el que estén los números en las dos series que construyas. -->


<?php


$serie = "1, 5, 8, 40, 100, -3, 2.5, 3000";

$numbers = explode(", ",$serie);

//var_dump($numbers);  control

sort($numbers); // Ordeno de menor a mayor

$count = count($numbers);

$array = ($count / 2); 

$numberLower = array_slice($numbers, 0, $array); //corto los arrays 
$numberBigger = array_slice($numbers, $array);

/* var_dump($numberLower);  // control
var_dump($numberBigger);
 */
echo "-------\nPequeños: ";
echo implode(', ', $numberLower);

echo "\nGrandes: ";
echo implode(', ', $numberBigger);

?>

