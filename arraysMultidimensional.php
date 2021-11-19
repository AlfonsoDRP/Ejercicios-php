<?php

$pais=array (
    "Andalucia"=>array("Huelva","Sevilla","Cordoba","Malaga","Cadiz","Jaen","Granada"),
    "Valenciana"=>array("Castellon","Valencia","Alicante"),
    "Extremadura"=>array("Cáceres","Badajoz")
);
foreach($pais as $comunidad => $provincia){
    echo "<h1>$comunidad</h1>";
    foreach($provincia as $indice=>$valor){
        echo "<p> $indice:$valor </p>";
    }
}


?>