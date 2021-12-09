<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (! isset($_GET['temperatura'])) {
// Cuando esta vacio cre array de temperaturas y pido los datos de las temperaturas
$mes = array(
"Enero",
"Febrero",
"Marzo",
"Abril",
"Mayo",
"Junio",
"Julio",
"Agosto",
"Septiembre",
"Octubre",
"Noviembre",
"Diciembre"
);
?>
Por favor, introduzca la temperatura media de cada mes.<br>

<form action="ejercicio2.php" method="get">
<?php
for ($i = 0; $i < 12; $i ++) {
echo "$mes[$i]: <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br>";
}
?>
<input type="submit" value="OK">
</form>
<?php
} else {
// Pinta el diagrama de barras
$temperatura = $_GET['temperatura'];
//creo la tabla para meter los datos obtenidos
echo "<table border=1>";
foreach ($temperatura as $mes => $temperaturaMes) {
echo "<tr><td>$mes </td><td>";
// Pinta la barra $temperaturames veces cada valor de temperatura
for ($i = 0; $i < $temperaturaMes; $i ++) {
echo "<img src=\"bggreen.png\">";
}
echo " $temperaturaMes" . "C<br></td></tr>";
}
echo "</table>";
}
?>
</body>
</html>