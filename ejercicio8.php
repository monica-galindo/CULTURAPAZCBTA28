<?php
$sueldos = [1300, 1200, 1300, 1100, 1200, 1200, 1500, 1700, 1800, 1300, 1200, 1100, 1400, 1399, 1200];
$suma = 0;
$promedio = 0;
$MasDeQuince = 0;
$sueldoMayor = $sueldos[$i];
$sueldoMenor = $sueldos[$i];

echo 'sueldos promedios ' .$i. ':' . $sueldos[$i]. '<br>';

for($i = 0; $i < count($sueldos); $i++){
$suma = $suma + $sueldos;

}

if($sueldos[$i] > $sueldoMayor){
$sueldoMayor = $sueldos[$i];
}

if($sueldos[$i] > 15000){
    $MasDeQuince++;
}

for ($j=0; $j<8;  $j++){
    $promedio = $promedio + $sueldos[$j];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
echo '<h1> el promedio es ='.($promedio/80). '<h1>';
}
?>