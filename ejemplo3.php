<?php

$menu = array(
    "primer menu" => array("primer plato","segundo plato"),
    "segundo menu" => array("primer plato","segundo plato")
);
foreach($menu as $menu2 => $plato){
    echo "<h1>$menu2</h1>";
    foreach($plato as $indice=>$valor){
        echo "<p> $indice:$valor </p>";
    }
}


?>