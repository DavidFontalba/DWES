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
        <title>Tabla de multiplicar DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Tabla de multiplicar del 1 al 10"/>

    </head>
    <body>
        <section>
            <?php 
                echo "<table>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";

                    echo "<td scope='row'><strong> Tabla del ".$i."</strong></td>";
                    for ($n = 1; $n <= 10; $n++) {
                        echo "<td>".$i." * ".$n." = ".($i*$n)."</td>";
                    }

                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </section>
    </body>
</html>