<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primos ordenados</title>
</head>

<body>
    <?php
    $numero = $_GET["n"];
    $contador = $_GET["contador"];
    $numeroTexto = $_GET["numeroTexto"];
    $primos = array();
    $normales = array();
    $ordennuevo = array();
    //parte del if para cuando se introduzcan los numeros
    if ($contador == 10) {
        $numeroTexto = $numeroTexto . " " . $numero;
        $numeroTexto = substr($numeroTexto, 2);
        $numerosin = explode(" ", $numeroTexto);
        //if de los primos
        foreach ($numerosin as $numero) {

            if ($numero % 2 == 0 || $numero % 5 == 0) {
                if ($numero == 2 || $numero == 5) { //filtro para saber si el numero a evaluar es el 2 o el 5 los cuales son primos
                    $primos[] = $numero;
                } else {
                    $normales[] = $numero;
                }
            } else {
                $primos[] = $numero;
            }
        }
        $ordennuevo = array_merge($primos,$normales);
        ?>
        <p>Tabla con el orden normal</p>
        <table style="border: 3px solid black;">
        <?php
        foreach ($numerosin as $key => $numero){
            echo "<tr>";
            echo "<td>$key</td><td>$numero</td>";
            echo "</tr>";
        }
        ?>
        </table>
        <p>Tabla con el orden de primos</p>
        <table style="border: 3px solid black;">
        <?php
        foreach ($ordennuevo as $key => $numero){
            echo "<tr>";
            echo "<td>$key</td><td>$numero</td>";
            echo "</tr>";
        }
        ?>
        </table>
        <?php
        //else para el bucle hasta que se introduzcan los numeros deseados
    } else {
        if (($contador < 10) || (!isset($numero))) {
    ?>
            <form action="arrayprimos.php">
                <label for="">Introduzca su numero</label>
                <input type="number" name="n" autofocus>
                <input type="hidden" name="contador" value="<?= ++$contador ?>">
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>">
                <input type="submit" value="Enviar">
            </form>
    <?php
        }
    }
    ?>
</body>

</html>