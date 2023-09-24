<!-- Ejercicio 3

Crea un programa que calcule el cambio a devolver. El programa tendrá como entrada una lista de
monedas/billetes disponibles y la cantidad a devolver. Como salida, devolverá el cambio a utilizar
(puedes hacer que lo devuelva como texto o como cualquier estructura de datos que consideres)

Por ejemplo:
Entrada
----------------
Monedas disponibles: [ 0.10, 0.50, 1, 2, 5]
Cambio a devolver: 9.50
Resultado: 0.50x1, 2x2, 1x5

Debe devolver el cambio con la menor cantidad posible de monedas y billetes. En el ejemplo
anterior, la solución 0.10x5, 4x1, 1x5 sería incorrecta ya que se usan 11 monedas, al contrario que
en la solución del ejemplo en la que se utilizan 4. -->


<?php

$coin = [0.10, 0.50, 1, 2, 5];
$exchange = 9.50;

rsort($coin);

$refund = [];

foreach ($coin as $coins) {
    while ($coins <= $exchange) {
        $refund[] = $coins;
        $exchange -= $coins; // voy disminuyendo la cantidad a devolver.
    }
}

if ($exchange == 0) {
    echo "Se ha completado el cambio, la devolución es igual a: [";
} else {
    echo "El cambio no ha sido completado";
}

//var_dump($refund);
echo implode(', ',$refund)."]";

?>