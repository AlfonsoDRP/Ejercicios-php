<?php
$string = "Alfonso Manuel Celia";
$nombre="Celia";
$pos = strpos($string,$nombre);

if($pos==true){
    echo "Su palabra se encuentra en el string<br>";
    echo "El nombre $nombre se empieza en la posicion $pos";
}else{
    echo "Su palabra no se encuentra en el string";
}