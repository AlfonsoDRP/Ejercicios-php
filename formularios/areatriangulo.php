<?php

$base = $_GET["base"];
$altura = $_GET["altura"];

$area=($base*$altura)/2;
$area=round($area,2);

echo "El área del triangulo es de $area cm<sup>2</sup><br>";
echo "<a href='indextriangulo.php'>Volver</a>"

?>