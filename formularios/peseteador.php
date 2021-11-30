<?php

$euro=$_GET["euro"];
$peset=$_GET["pesetas"];

$pesetas=166.386*$euro;
$eu=$peset*0.006;
$pesetas=round($pesetas);

echo "Usted ha recibido un total de $eu euros<br>";
echo "Usted ha recibido un total de $pesetas pesetas<br>";
echo "<a href='indexpesetas.php'>Volver</a><br>";

?>