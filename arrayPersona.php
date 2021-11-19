<?php

$personas = array(
    "Persona1" => array("nombre"=>"Paco","apellido"=>"fernandez","ciudad"=>"Sevilla"),
    "Persona2" => array("nombre"=>"Lolo","apellido"=>"lopez","ciudad"=>"madrid"),
    "Persona3" => array("nombre"=>"Alfonso","apellido"=>"derojas","ciudad"=>"teruel"),
    "Persona4" => array("nombre"=>"Fernando","apellido"=>"mejide","ciudad"=>"caceres"),
    "Persona5" => array("nombre"=>"Marcos","apellido"=>"maria","ciudad"=>"toledo")
);

echo $personas["Persona1"]["apellido"]."<br>";
echo $personas["Persona3"]["ciudad"]."<br>";
echo $personas["Persona3"]["ciudad"]."<br>";
var_dump($personas);

foreach($personas as $persona => $info){
    echo "<h1>$persona</h1>";
    foreach($info as $indice=>$valor){
        echo "<p> $indice:$valor </p>";
    }
}



?>