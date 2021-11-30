<?php
$horas = $_GET["horas"];

$salario = $horas * 12;
$salario = round($salario,2);

echo "Su salario quedaria en un total de $salario euros<br>";
echo "<a href='indexsalario.php'>Volver</a>"

?>