<?php
    if(!file_exists("hola.txt")){
        file_put_contents("hola.txt", "0\r\n0");
    }

    if(isset($_GET['A']) && isset($_GET['B'])){
        $VAR3=$_GET['A'];
        $VAR4=$_GET['B'];
        $TEXTO=$VAR3 . "\r\n" .$VAR4;
        file_put_contents("hola.txt", $TEXTO);
    }

    $ARCHIVO = file_get_contents("hola.txt");
    $pos1= strpos($ARCHIVO,"\r\n");
    $VAR1=substr($ARCHIVO,0,$pos1);
    $VAR2=substr($ARCHIVO,$pos1+1);
?>

<!DOCTYPE  html>
<html>
    <head>
        <title>Bienvenido</title>
        <meta http-equiv="refresh" content="5">
    </head>
    <body>
        <h1>Practica 7: Evio PHP</h1>
        <h3>A= <?php echo $VAR1 ?></h3>
        <h3>B= <?php echo $VAR2 ?></h3>
    </body>
</html>
