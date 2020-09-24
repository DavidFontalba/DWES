<!--
    Autor: David Galván Fontalba
    Fecha: 24 / 9 / 2020
-->

<?php
    $radio = 2;
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Área de un círculo DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Calcula el área de un círculo introduciendo el radio en una variable"/>

    </head>
    <body>
        <section>
            <?php 
                echo "<p>El radio es ".$radio." cm y su área es ". pi() * pow($radio,2) ." cm</p>";
                /** La función pi() nos devuelve el valor de pi, y la función pow recibe
                 * como parámetros la base y el exponente, como el área de un círculo se calcula
                 * multiplicando pi por el radio al cuadrado, le enviamos primero el radio como base
                 * y un 2 como exponente.
                 */
            ?>
        </section>
    </body>
</html>