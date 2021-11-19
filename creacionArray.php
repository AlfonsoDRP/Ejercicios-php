<?php
$alturasPrimero=array(164,178,169,182);
$alturassegundo=array(
    0=>164,
    1=>178,
    2=>169,
    3=>182
);

/*while($key==current($alturasPrimero)){
    if ($key==0||2){
        echo key($alturasPrimero).'<br>';
    }
    next($alturasPrimero);
}*/
echo $alturassegundo[0]."<br>";
echo $alturassegundo[2]."<br>";
$alturassegundo[2]=178;
echo $alturassegundo[2]."<br>";
$alturassegundo[]=189;
echo $alturassegundo[4]."<br>";
var_dump($alturassegundo)."<br>";
unset($alturassegundo[2]);
echo $alturassegundo[2]."<br>";
echo $alturassegundo[3]."<br>";
var_dump($alturassegundo);

?>