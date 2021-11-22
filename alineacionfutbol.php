<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $furbo = array("portero" => array("Karius"),
    "defensas" => array ("Robertson","Lovren","van dijk", "Alexander-Arnold"),
    "Centrales" => array("Milner", "Henderson", "Wijnaldum"),
    "Delanteros" => array("Salah","Firmino","Mané"));

    
    foreach($furbo as $posicion => $jugador){
        echo "<h1>$posicion</h1>";
        foreach($jugador as $indice=>$valor){
            echo "<p> $indice:$valor </p>";
        }
    }

    ?>
</body>
</html>