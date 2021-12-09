<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotacion</title>
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

////////////////////////////////////////////////////////////////
// Programa principal una vez recogidos los datos del array.
// El array con los números es $numero
////////////////////////////////////////////////////////////////

if ($contadorNumeros == 15) {
$numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
$numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes del inicio vacio
$numero = explode(" ", $numeroTexto); //Devuelve un array de String eliminando "

//Bucle para mostrar los numeros con su correspondiente maximo y minimo
echo "Array normal<br>";
foreach ($numero as $n) {
echo "$n ";
}
echo "<br>Array rotado<br>";
echo $numero[14]." ";
for ($i=-1; $i<=12; $i++){
    echo $numero[$i+1]." ";
}
}

////////////////////////////////////////////////////////////////


// Pide número y añade el actual a la cadena
if (($contadorNumeros < 15) || (!isset($n))) {
?>
<form action="rotararray.php" method="get">
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