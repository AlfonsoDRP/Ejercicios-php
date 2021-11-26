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

    $sueldos=array(500,1550,2500,800,1400,1900);
    $edad = array(28,36,31,18,32,49);
    echo "Sueldos antes del cambio:<br>";
    foreach ($sueldos as $key => $val) {
        echo "$key = $val<br>";
    }
    echo "Edades:<br>";
    foreach ($edad as $key => $val) {
        echo "$key = $val<br>";
    }

    for ($i=0;$i<=5;$i++){
        if ($sueldos[$i]>=1000 && $sueldos[$i]<=2000){
            if ($edad[$i]>45){
                $sueldos[$i]=$sueldos[$i]+($sueldos[$i]*(3/100));
            }else if($edad[$i]<=45){
                $sueldos[$i]=$sueldos[$i]+($sueldos[$i]*(10/100));
            }
        }
        if ($sueldos[$i]<1000){
            if ($edad[$i]<30){
                $sueldos[$i]=1100;
            }else if($edad[$i]>=30 && $edad[$i]<=45){
                $sueldos[$i]=$sueldos[$i]+($sueldos[$i]*(3/100));
            }else if ($edad[$i]>45){
                $sueldos[$i]=$sueldos[$i]+($sueldos[$i]*(15/100));
            }
        }  
    }
    echo "Sueldos:<br>";
    foreach ($sueldos as $key => $val) {
        echo "$key = $val<br>";
    }
    echo "Edades:<br>";
    foreach ($edad as $key => $val) {
        echo "$key = $val<br>";
    }
?>
</body>
</html>