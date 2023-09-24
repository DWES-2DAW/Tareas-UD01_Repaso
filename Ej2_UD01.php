
<!-- Eercicio 2 

Prepara un programa para el que, dado un número, produzca como salida una versión de la letra de la canción de "un limón, y medio limón" que acabe con el número de limones indicado (y medio limón)

Por ejemplo:

Entrada: 4
Salida:
1 limón, y medio limón
2 limones, y medio limón
3 limones, y medio limón
¡¡¡Y 4 LIMONES Y MEDIO LIMÓN!!!
Ojo a las mayúsculas de la última estrofa.

Si quieres puedes intentar la versión avanzada, en la que el programa debería imprimir:
Un limón, y medio limón
Dos limones, y medio limón
...
Doscientos veintitrés mil cuatrocientos diecisiete limones, y medio limón
¡¡¡Y DOSCIENTOS VEINTITRÉS MIL CUATROCIENTOS DIECIOCHO LIMONES Y MEDIO LIMÓN!!! -->


<?php

function songLemon($number) {
    for ($i = 1; $i <= $number; $i++) {
        if ($i != $number) {
            echo $i . ' limón' . ($i > 1 ? 'es' : '') . ', y medio limón' . "\n";
        } else {
            echo '¡¡¡Y ' . $i. ' LIMON'. ($i > 1 ? 'ES' : '').' Y MEDIO LIMÓN!!!' . "\n";
        }
    }
}

songLemon(readline("Insert a number: "));

?>