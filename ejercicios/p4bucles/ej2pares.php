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
        <title>Suma de los 3 primeros pares DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Programa que suma los 3 primeros números pares"/>

    </head>
    <body>
        <section>
            <?php 
                $pares = 0;
                $contador = 0;
                for ($i = 1; $contador < 3; $i++) {
                    if ($i % 2 == 0) {
                        echo "<p> Número par ".($contador+1)."º -> ".$i."</p>";
                        $pares += $i;
                        $contador++;
                    }
                }
                echo "<p> La suma de los tres números pares es ".$pares."</p>";
            ?>
        </section>
    </body>
</html>