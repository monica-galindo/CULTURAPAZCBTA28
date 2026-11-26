<?php
/*una estacion metereologica quiere registrar la temperatura registrada en el municipio de canatlan durante 20 dias. desarolle un programa que recorra todas las temperaturas y muestre lo siguiente: 1 la temperatura de cada dia, 2 la suma de todas las temperaturas, 3 el promedio*/

$temperatura = [12, 11, 10, 9, 8, 7, 9, 13, 17, 20, 23, 24, 25, 25, 23, 21, 19, 22, 23, 11];
$suma = 0;
for($i = 0; $i < $temperatura; $i++){

echo '<h5> la temperatura de 20 dias fueron:' .$temperatura[$i]. '</h5>';
 echo '<br>';

 $suma = $suma+$temperatura[$i];
}

?>