<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 6 / 10 / 2020
 */
 $comunidades = array(
     "Andalucía" => array("Córdoba","Granada","Sevilla","Huelva","Jaén","Almería","Cádiz","Málaga"),
     "CastillaLeón" => array("Valladolid", "Leon", "Palencia", "Burgos", "Soria", "Avila", "Segovia", "Zamora", "Salamanca"),
     "Madrid" => array("Madrid"),
     "Galicia" =>  array("Lugo", "Orense", "Coruña", "Pontevedra")
 );

?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Prueba DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Pruebas con arrays"/>

    </head>
    <body>
        <section>
            <?php 
                echo "<table style='border: black 1px solid'>";
                foreach ($comunidades as $comunidad=>$provincias) {
                    echo "<tr><td scope='row' style='border: black 1px solid'>$comunidad</td>"; 
                        foreach ($provincias as $provincia) {
                            echo "<td style='border: black 1px solid'>$provincia</td>";
                        }
                        echo "</tr>";
                }
                echo "</table>";
            ?>
        </section>
    </body>
</html>