<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 24 / 9 / 2020
 */
    $variable = "string";
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Contenido Variable DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Script que carga unas variables específicas para sacar un resultado concreto."/>

    </head>
    <body>
        <section>
            <?php 
                echo "<p>Valor es ".gettype($variable)."</p>";
                $variable = 0.1;
                echo "<p>Valor es ".gettype($variable)."</p>";
                $variable = false;
                echo "<p>Valor es ".gettype($variable)."</p>";
                $variable = 1;
                echo "<p>Valor es ".gettype($variable)."</p>";
                $variable = NULL;
                echo "<p>Valor es ".gettype($variable)."</p>";
            ?>
        </section>
    </body>
</html>