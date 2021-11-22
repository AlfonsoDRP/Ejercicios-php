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

    $diezale = array();
    $numerobusqueda=11;
    $i=0;
    for ($i=0;$i<11;$i++){
    $ale = rand (1,100);
    $diezale[]=$ale;
    }
    if (array_search($numerobusqueda,$diezale)==true){
        echo "Se ha generado el numero $numerobusqueda<br>";
    }else{
        echo "No se ha generado el numero $numerobusqueda<br>";
    }
    for ($i=0;$i<11;$i++){
        echo $diezale[$i]."<br>";
    }
    ?>
</body>
</html>