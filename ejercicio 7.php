<html>
    <head>
        <title>tablas multiplicar</title>
    </head>
    <body>
        <table border="5px solid black">
        
        <?php
          $i=1;
          $f=1;
          $num=1;
          $multi1=1;
          $multi2=1;
          $resultado=0;
          echo "<tr><td>X</td>";
          for ($i=1;$i<=10;$i++){
              echo "<td>$num</td>";
              $num++;
          }


          $num=1;
          for($i=1;$i<=10;$i++){
              echo "<tr>";
              
              echo "<td>$num</td>";
              for($f=1;$f<=10;$f++){
                  $resultado=$multi1*$multi2;
                    echo "<td>$resultado</td>";
                    $multi2++;
                }
              $multi1++;
              $multi2=1;
              $num++;
          }
              
              echo "</tr>";
            
        ?>

        </table>
    </body>
</html>