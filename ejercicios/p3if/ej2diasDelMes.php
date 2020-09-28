<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 25 / 9 / 2020
 */
    $mes = 3;
    $anyo = 2020;
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Días DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Según el año y el mes muestra los días que tiene dicho mes.."/>

    </head>
    <body>
        <section>
            <?php 
                //Febrero
                if ($mes == 2) {
                    if ($anyo/4 == (int)($anyo/4) ) {
                        if ($anyo/100 != (int)($anyo/100) || $anyo/400 == (int)($anyo/400)) {
                          echo "El mes ".$mes." tiene 29 días";
                        }
                      } else {
                        echo "El mes ".$mes." tiene 28 días";
                      }
                //Meses de 31
                } else if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || 
                $mes == 8 || $mes == 10 || $mes == 12) {
                    echo "El mes ".$mes." tiene 31 días";
                //Meses de 30
                } else {
                    echo "El mes ".$mes." tiene 30 días";
                }
            ?>
        </section>
    </body>
</html>