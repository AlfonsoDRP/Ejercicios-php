<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <!-- primera linea de la tabla fuera de php-->
    <table border="5px solid black">
        <tr>
            <td>Nro</td>
            <td>Factorial</td>
            <td>Calcular como</td>
            <td>imprime</td>
        </tr>
        <?php
        $factorial=1;
        $i=1;
        $num=1;
        /*Funcion para factorial*/ 
        do{
            $num=1;
            $multi="";
            echo "<tr>";
            /*columna factorial */
            echo "<td>$factorial</td>";

        /*calculo del factorial*/ 
            for ($i=1;$i<=$factorial;$i++){
                $num=$num*$i;

            }
            echo "<td>$num</td>";
            /*calcular como*/ 
            for ($i=1;$i<=$factorial;$i++){
                
                $multi=$multi."$i";
                /*Condicion para que el * no quede al final*/ 
                if($i!=$factorial){
                    $multi="$multi * ";
                }
                

            }
            echo "<td>$multi</td>";
            /*Cuarta columna */
            echo "<td>$factorial-$num</td>";
            $factorial++;
            echo "</tr>";
        }while($factorial!=11)
        ?>
    </table>
</body>
</html>