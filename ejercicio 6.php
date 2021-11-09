<html>
    <head>
        <title>select con for</title>
    </head>
    <body>
        <select name="select">
        <?php
            $i=1;
            for($i=1;$i<10;$i++){
                echo "<option value='$i'>$i</option>";
            }
        ?>
        </select>
    </body>
</html>