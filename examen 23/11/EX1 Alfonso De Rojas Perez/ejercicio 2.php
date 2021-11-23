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

    $noticia=0;
    while($noticia!=100){

        echo "<h1>Noticia: $noticia</h1>";
        echo "<p>La noticia es bastante interesante</p>";
        $noticia=$noticia+1;
    }

    ?>
</body>
</html>