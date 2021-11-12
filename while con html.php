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
    $i=1;
    
    $h2="<h2>Esta noticia es interesantisima</h2><br><br>";
    $cuerpo="<p>Este es el cuerpo de la noticia</p><br><br>";
    while($i!=11){
        $h1="<h1>Noticia $i</h1><br><br>";
      echo $h1,$h2,$cuerpo;
      $i++;
    }
    ?>
</body>
</html>