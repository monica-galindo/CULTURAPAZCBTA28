<?php
/*crear un arreglo de 50 posiciones, recorrer el arreglo con un ciclo for, para los primeros 25 arreglos hay que sumarlos y los otros 25 hay que multiplicarlos entre si*/

$numeros = [6, 7, 7, 6, 4, 4, 5, 8, 3, 6, 7, 8, 9, 9, 7, 8, 6, 4, 2, 1, 1, 3, 5, 3, 5, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25];
$suma = 0;
$multiplicacion = 1;


for($i = 0; $i < 24; $i++){
 $suma = $suma+$numeros[$i];
    echo $numeros[$i];
    echo '<br>';
}

 echo '<h1> la suma de los primeros es:' .$suma. '<h1>';
 echo '<br>';

 for($j=25; $j<50; $j++){
  $multiplicacion = $multiplicacion * $numeros[$j];
echo $numeros[$j];


 }
echo '<h1>la multiplicacion de los numeros es: ' .$multiplicacion. '</h1>';

?>