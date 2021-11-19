<?php

$nombres = array ("Paco y Juanmi","Belén","Juan");
$i=0;
for ($i=0;$i<3;$i++){
    echo $nombres[$i]."<br>";
}
for ($i=0;$i<3;$i++){
    if ($i%2==0){
    var_dump($nombres[$i])."<br>";
    }
}
