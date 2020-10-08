<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 29 / 9 / 2020
 */
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>1 a 10 DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Bucle que escribe números del 1 al 10."/>

    </head>
    <body>
        <section>
            <?php 
                for ($i = 1; $i <= 10; $i++) {
                    echo "<p>".$i."</p>";
                }
            ?>
        </section>
    </body>
</html>