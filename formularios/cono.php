<?php

$volumen = (1/3) * pi() * (pow ($_GET["radio"],2) * $_GET["altura"]);

echo "El volumen de su cono es de ".round($volumen,2)."cm<sup>3</sup><br>";
echo "<a href='indexcono.php'>Volver</a>"
?>