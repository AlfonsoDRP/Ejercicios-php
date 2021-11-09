<?php
//definicion de un integer
$numcoches = 0;

$numcochesalmacen=2;

echo $numcoches."<br>";

$numcoches=$numcochesalmacen;

echo $numcoches."<br>";
//definicion de float
$var = 1.5;

echo $var."<br>";

$var = 2.7;

echo $var."<br>";

//mezcla de int y float

$euros=20;

$centimos=3;

$dinerototal=$euros+($centimos/100);

echo $dinerototal."<br>";

//definicion de tipo decimal

$str = "ola k ase"."<br>";

echo $str;

$str = "hola que haces"."<br>";

echo $str;
//entrecomillado simple y doble (comilla simple no permite poner variables dentro)

$frasepolitico='españa va bien';
$tengoeuros=10;
$frasetrabajador = "tengo $tengoeuros euros";


echo "frase de politico: $frasepolitico<br>";
echo "frase de trabajador: $frasetrabajador<br>";

$frasepolitico = 'España no va tan bien';

echo "frase de politico: $frasepolitico<br>";

