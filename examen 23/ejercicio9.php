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
    $pares = array();
    $orden = array();
    $impares = array();
    $i = 0;
    for ($i=0;$i<20;$i++){
        $ale = rand(0,100);
        $array[]=$ale;
    }
    for ($i=0;$i<20;$i++){
        if ($array[$i]%2==0){
            $pares[]=$array[$i];
        }else{
            $impares[]=$array[$i];
        }
    }
    
    asort($pares);
    asort($impares);
    $orden = $pares + $impares; 
    echo "Array completo:<br>";
        foreach ($array as $key => $val) {
            echo "$key = $val<br>";
        }
    echo "Array ordenado:<br>";
        foreach ($orden as $key => $val) {
            echo "$key = $val<br>";
        }
    ?>
</body>
</html>