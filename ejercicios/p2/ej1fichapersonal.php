<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 24 / 9 / 2020
 */
    $nombre = "David";
    $apellidos = "Galván Fontalba";
    $img = "gatomascarilla.jpeg";
    $edad = "22"
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Ficha Personal DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Ficha Personal"/>

    </head>
    <body>
        <section>
            <?php 
                echo "<p>Soy ".$nombre." ".$apellidos." y tengo ".$edad." años</p>";
                echo "<p><img src=./".$img." width=200px></p>";
            ?>
        </section>
    </body>
</html>