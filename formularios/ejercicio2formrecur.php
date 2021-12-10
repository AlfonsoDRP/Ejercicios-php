<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturas</title>
</head>
<body>
<?php

if (!isset($_GET["temperatura"])){
    
    $contadorNumeros = 0;
    $numeroTexto = "";
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
    "Diciembre");


?>
<form action="ejercicio2formrecur.php" method="get">
<?php
for ($i=0; $i<=11; $i++){
    
    echo "$meses[$i]:<input type='number' name='temperatura[$meses[$i]]'><br>";
    
}
?>
<input type="submit" value="enviar">
</form>

<?php
}else{
$temperaturas = $_GET["temperatura"];
?>
<table style="border: 5px solid black;">
    <?php
    foreach($temperaturas as $meses => $temperatura){
        echo "<tr><td>$meses</td><td>";
        for ($i = 0;$i<$temperatura; $i++){
            echo "<img src='barra.png'>";
        }
        echo "$temperatura C<br></td></tr>";
    }
    ?>
</table>
<?php
}
?>
