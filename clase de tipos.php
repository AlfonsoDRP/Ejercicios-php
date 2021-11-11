<?php
//definicion de un integer
$numcoches = 0;

$numcochesalmacen=2;

echo $numcoches."<br><br>";

$numcoches=$numcochesalmacen;

echo $numcoches."<br><br>";
//definicion de float
$var = 1.5;

echo $var."<br><br>";

$var = 2.7;

echo $var."<br><br>";

//mezcla de int y float

$euros=20;

$centimos=3;

$dinerototal=$euros+($centimos/100);

echo $dinerototal."<br><br>";

//definicion de tipo decimal

$str = "ola k ase"."<br><br>";

echo $str;

$str = "hola que haces"."<br><br>";

echo $str;
//entrecomillado simple y doble (comilla simple no permite poner variables dentro)

$frasepolitico='españa va bien';
$tengoeuros=10;
$frasetrabajador = "tengo $tengoeuros euros";


echo "frase de politico: $frasepolitico<br><br>";
echo "frase de trabajador: $frasetrabajador<br><br>";

$frasepolitico = 'España no va tan bien';

echo "frase de politico: $frasepolitico<br><br>";

//conversion de decimal a entero

$var1 = 1;
$var2 = 0.9;

$suma = $var1+ $var2;
$soloint=(int) $suma;

echo "la suma de las variables es de $soloint<br><br>";

//funciones string

$guiones="--";
$fraseespacios=" Hola cabeza tengo espacios al principio????? ";
$tamaño=strlen($fraseespacios);
echo $guiones. $fraseespacios;
echo "<br><br>";
trim($fraseespacios);
echo $guiones.$fraseespacios;
echo "<br><br>El tamaño de la frase es de ".$tamaño."<br><br>";


?>


