<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $frutas1 = array("papaya","banana","papaya","mango","fresa","pera");
    $frutas2 = array("melon","manzana","melon","naranja","piña","tomate");
    $frutasunidas = $frutas1 + $frutas2;
    $frutasunidas = array_unique($frutasunidas);
    asort($frutasunidas);
    echo "mayor a menor:<br>";
    foreach ($frutasunidas as $key => $val) {
        echo "$key = $val<br>";
    }
    arsort($frutasunidas);
    echo "menor a mayor:<br>";
    foreach ($frutasunidas as $key => $val) {
        echo "$key = $val<br>";
    }
?>
</body>
</html>