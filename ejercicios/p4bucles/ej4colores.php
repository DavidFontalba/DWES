<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 1 / 10 / 2020
 */

$INC = 51;

?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Paleta de colores DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Muestro una paleta de colores"/>

    </head>
    <body>
        <section>
            <?php 
                
                echo "<table>";
                for ($red = 0; $red <= 255; $red += $INC) {

                    for ($green = 0; $green <= 255; $green += $INC) {
                        echo "<tr>";

                        for ($blue = 0; $blue <= 255; $blue += $INC) {
                            $color = "rgb($red,$green,$blue)";
                            echo '<td style="background-color:'.$color.'">'.$color.'</td>';

                        }
                        echo "</tr>";

                    }
                    
                }
                echo "</table>"

            ?>
        </section>
    </body>
</html>