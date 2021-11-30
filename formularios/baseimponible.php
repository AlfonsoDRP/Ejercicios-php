<?php

$base = $_GET["base"];

$total=$base*1.21;
$total = round($total,2);
echo "El total de su factura es de $total<br>";
echo "<a href='indexbaseimponible.php'>Volver</a>"
?>