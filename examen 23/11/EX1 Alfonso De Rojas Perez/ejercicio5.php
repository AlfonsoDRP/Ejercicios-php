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
    $array2 = array();
    $array3 = array();
    $array4 = array();
    $i = 0;
    for ($i=0;$i<20;$i++){
        $ale = rand(0,5);
        $array[]=$ale;
    }
    foreach ($array as $key => $valor) {
        $array2[]=$key;
    }
    foreach ($array as $key => $val) {
        if ($val==5){
            $array3[]=$key;
        }
    }
    foreach ($array as $key => $val) {
        if ($val==0){
            $array4[]=$key;
        }
    }
    echo "array 1:<br>";
    foreach ($array as $key => $val) {
        echo "$key = $val<br>";
    }
    echo "Array 2: <br>";

    foreach ($array2 as $key => $val) {
        echo "$val<br>";
    }
    echo "array 3: <br>";
    foreach ($array3 as $key => $val) {
        echo "$val<br>";
    }
    echo "array 4: <br>";
    foreach ($array4 as $key => $val) {
        echo "$val<br>";
    }


?>
</body>
</html>