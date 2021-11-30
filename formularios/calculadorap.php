<?php

$num1=$_GET["num1"];
$num2=$_GET["num2"];

$suma =  $num1+$num2;
$resta = $num1-$num2;
$multi = $num1*$num2;
$div = $num1/$num2;

echo "El resultado de la suma es $suma <br>";
echo "El resultado de la resta es $resta<br>";
echo "El resultado de la multiplicacion es $multi<br>";
echo "El resultado de la division es $div<br>";
echo "<a href='calculadora.php'>Volver</a>"
?>