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

$meses = array(
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

<form action="temperaturas.php" method="get">
<?php
for ($i = 0; $i < 12; $i ++) {
echo "$meses[$i]: <input type='number' name ='temperatura[$meses[$i]]'><br>";
}
?>
<input type="submit" value="OK">
</form>
<?php
} else {
$temperatura = $_GET['temperatura'];
echo "<table border=1>";
foreach ($temperatura as $meses => $temperaturameses) {
echo "<tr><td>$meses </td><td>";
for ($i = 0; $i < $temperaturameses; $i ++) {
echo "<img src=\"bggreen.png\">";
}
echo " $temperaturameses" . "C<br></td></tr>";
}
echo "</table>";
}
?>
</body>
</html>