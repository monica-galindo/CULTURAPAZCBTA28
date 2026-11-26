<?php
/*guardar en un arreglo 15 calificaciones, mostrarlas con un ciclo for y sacar el promedio*/
$calificaciones = [10, 9, 8, 7, 6, 5, 9, 6, 5, 6];
$acumulador = 0;
$promedio = 0;


for($i=0; $i < count($calificaciones); $i++){

echo $calificaciones[$i];
echo '<br>';
$acumulador = $acumulador + $calificaciones[$i];

}

$promedio = $acumulador/count($calificaciones);
echo '<h1>el promedio es: ' .$promedio.'</h1>';
                    
    ?>                              
                         
                    
                                                     
       
               
                    