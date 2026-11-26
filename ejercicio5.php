<?php
/*crear un arreglo que contenga el precio de 5 productos. recorrer el arreglo y mostrar el precio
 de los productos, asi como un iva de %16 a la suma total de los productos y mostrar total a pagar*/

 $productos = ['78', '98', '65', '75', '43'];
 $suma = 0;

for($i=0; $i < count($productos); $i++){

echo $productos[$i];
echo '<br>';
$suma= $suma + $productos[$i];

echo '<h1>total sin iva: ' .$suma.'</h1>';
echo '<br>';

}

$iva = $suma * 0.16;
echo '<h1>total a pagar con iva es: ' .$iva.'</h1>';
                    
   


 ?>