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
    $mayor=0;
    $menor=100;
$i = 0;
    for ($i=0;$i<20;$i++){
        $ale = rand(0,100);
        $array[]=$ale;
    }
    for ($i=0;$i<20;$i++){
        if($array[$i]>$mayor){
            $mayor=$array[$i];
        }
        if($array[$i]<$menor){
            $menor=$array[$i];
        }
        
    }
    echo "Array completo:<br>";
        foreach ($array as $key => $val) {
            echo "$key = $val<br>";
        }
        echo "El numero mayor del array seria el: $mayor<br>";
        echo "El numero menor del array seria el: $menor<br>";
    ?>
</body>
</html>