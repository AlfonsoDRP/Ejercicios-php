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
    $contador = 0;
    $mayor = 0;
    $numero = $_GET["numero"];
    $string = "";
    $menor = 10000;
    if (isset($_GET["numero"])) {
        if ($contador < 5) {
            echo "<form action=''>
        <h1>Introduzca sus numeros</h1>
        <label for=''>Numero:</label>
        <input type='text' name='numero'><br>
        <input type='submit'><br>
        <a href='indexejercicios.php'>Volver al indice de ejercicios</a>
    </form>";
            $string = $string . $numero;
            echo $string;
            $contador++;
        } else {
            for ($i = 0; $i < 5; $i++) {
                if ($array[$i] > $mayor) {
                    $mayor = $array[$i];
                }
                if ($array[$i] < $menor) {
                    $menor = $array[$i];
                }
            }
            foreach ($array as $key => $valor) {
                if ($valor == $mayor) {
                    echo "$array[$i] mayor";
                } elseif ($valor == $menor) {
                    echo "$array[$i] menor";
                } else {
                    echo "$array[$i]";
                }
            }
        }
    } else {
        echo "<form action='indexgordo.php'>
        <h1>Introduzca sus numeros</h1>
        <label for=''>Numero:</label>
        <input type='text' name='numero'><br>
        <input type='submit'><br>
        <a href='indexejercicios.php'>Volver al indice de ejercicios</a>
    </form>";
        $string = $string . $numero;
        /*echo $string;*/
        $contador++;
    }
    ?>

</body>

</html>