<!--
    Autor: David Galván Fontalba
    Fecha: 24 / 9 / 2020
-->

<?php
    $x = 10;
    $y = 7;
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Script variables DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Script que carga unas variables específicas para sacar un resultado concreto."/>

    </head>
    <body>
        <section>
            <?php 
                echo "<p>".$x." + ".$y." = ".($x+$y)."</p>";
                echo "<p>".$x." - &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$y." = ".($x-$y)."</p>";
                echo "<p>".$x." * ".$y." = ".($x*$y)."</p>";
                echo "<p>".$x." / ".$y." = ".($x/$y)."</p>";
                echo "<p>".$x." % ".$y." = ".($x%$y)."</p>";
            ?>
        </section>
    </body>
</html>