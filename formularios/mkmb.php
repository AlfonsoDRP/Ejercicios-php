<?php

$kb = $_GET["mb"]*1024;
$mb = $_GET["kb"]/1024;
round($kb,2);
round($mb,2);

echo "Sus Mb han resultado ser un total de $kb KB<br>";
echo "Sus Kb han resultado ser un total de $mb MB<br>";
echo "<a href='indexmbkb.php'>Volver</a>"
?>