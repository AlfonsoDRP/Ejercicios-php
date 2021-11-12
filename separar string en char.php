<?php
$string="a-a-r-e-f-a";
$lon=strlen($string);
echo $lon;
echo"<br>";
echo substr($string,($lon/2),6);
echo "<br>";
$string=str_replace("a","tortuga",$string);
echo $string;
echo "<br>";
$string=strrev($string);
echo $string;
echo "<br>";
$string=strrev($string);
echo $string;
echo "<br>";
$string=str_replace("e","conejo",$string);
echo $string;
echo "<br>";
$string=str_replace("r","cabra",$string);
$string=str_replace("f","vaca",$string);
echo $string;





