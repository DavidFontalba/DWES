<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 25 / 9 / 2020
 */
    $x = 80;
    $y = 12;
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>El número mayor DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Dos números en variables y se escribe el mayor de ellos."/>

    </head>
    <body>
        <section>
            <?php 
                echo "<p>De los números ".$x." y ".$y.", ";
                if ($x > $y) {
                    echo "el mayor es ".$x."</p>";
                } else if ($y > $x) {
                    echo "el mayor es ".$y."</p>";
                } else {
                    echo "no hay ninguno mayor que otro.";
                }
            ?>
        </section>
    </body>
</html>