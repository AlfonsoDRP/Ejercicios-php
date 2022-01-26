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
$n = $_GET['n'];
$contadorNumeros = $_GET['contadorNumeros'];
$numeroTexto = $_GET['numeroTexto'];

if (!isset($n)) {
$contadorNumeros = 0;
$numeroTexto = "";
}



if ($contadorNumeros == 10) {
$numeroTexto = $numeroTexto . " " . $n; 
$numeroTexto = substr($numeroTexto, 2); 
$numero = explode(" ", $numeroTexto); 
$maximo = -PHP_INT_MAX;
$minimo = PHP_INT_MAX;

foreach ($numero as $n) {
if ($n < $minimo) {
$minimo = $n;
}
if ($n > $maximo) {
$maximo = $n;
}
}

foreach ($numero as $n) {
if ($n == $minimo) {
echo "$n minimo<br>";
} else if ($n == $maximo) {
echo "$n maximo<br>";
} else {
echo "$n<br>";
}
}
}




if (($contadorNumeros < 10) || (!isset($n))) {
?>
<form action="indexgordo.php" method="get">
<input type="hidden" name="ejercicio" value="02">
Introduzca un número:
<input type="number" name ="n" autofocus>
<input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
<input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
<input type="submit" value="OK">
</form>
<?php
}
?>
</body>

</html>