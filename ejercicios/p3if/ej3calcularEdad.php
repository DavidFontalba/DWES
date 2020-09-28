<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 27 / 9 / 2020
 */
    $birth = new DateTime("08.04.1998");
    $now = new DateTime(date("d.m.Y"));
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Edad DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Con la fecha de nacimiento, calcular la edad."/>

    </head>
    <body>
        <section>
            <?php 
                $age = date_diff($birth,$now);
                echo "<p>Naciste en el ".$birth->format("d/m/Y")." y hoy es ".$now->format("d/m/Y")."</p>";
                echo "<p>Tienes ".$age->y." años, ".$age->m." meses y ".$age->d." días</p>";
            ?>
        </section>
    </body>
</html>