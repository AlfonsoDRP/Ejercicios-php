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
    for ($i=0;$i<10;$i++){
        $ale = rand(0,100);
        $array[]=$ale;
    }
    
    for ($i=0;$i<10;$i++){
        echo $array[$i]." ";
    }
    echo "<br>orden<br>";
    asort($array);
    foreach ($array as $key => $val) {
        echo "$key = $val<br>";
    }
?>
</body>
</html>