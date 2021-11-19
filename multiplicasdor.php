<?php

$array=[2,4,6,8];
$multiplicador=10;

echo "La array inicial es: ";
print_r($array);
echo "<br>";
echo "el resultado de la multiplicacion es de :";

foreach($array as &$valor){
    $valor=$valor*$multiplicador;

}
print_r($array);



?>