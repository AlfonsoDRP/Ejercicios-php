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

    $array = array();
    $i = 0;
    for ($i=0;$i<20;$i++){
        $ale = rand(0,100);
        $array[]=$ale;
    }
    $arraycuadrado=array();
    $arraycubo=array();
    foreach($array as &$valor){
        $arraycuadrado[]=$valor*$valor;
    }
    foreach($array as &$valor){
        $arraycubo[]=$valor*$valor*$valor;
    }
    echo "Array inicial: <br>";
    foreach ($array as $key => $val) {
        echo "$key = $val<br>";
    }
    echo "Array cuadrado: <br>";

    foreach ($arraycuadrado as $key => $val) {
        echo "$key = $val<br>";
    }
    echo "array cubo: <br>";
    foreach ($arraycubo as $key => $val) {
        echo "$key = $val<br>";
    }
    ?>
</body>
</html>