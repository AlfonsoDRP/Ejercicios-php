<?php
$deportes=array (
    "futbol"=>array("liverpool","chelsea","bayern"),
    "motos"=>array("Honda","repsol","kawasaki"),
    "baloncesto"=>array("lakers","chicago bulls","Spurs")
);

echo  $deportes["futbol"]["1"]."<br>";
echo  $deportes["motos"]["2"]."<br>";
echo  $deportes["baloncesto"]["0"]."<br>";
var_dump($deportes);

?>