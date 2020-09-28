<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 25 / 9 / 2020 
 * */
    $nombre = "Harry";
    $numero = 28;
    $null = NULL;
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
                echo '<p>'.var_dump($nombre).'</p>';
                echo "<p>".$nombre."</p>";
                echo '<p>'.var_dump($numero).'</p>';
                echo "<p>".gettype($null)."</p>";
            ?>
        </section>
    </body>
</html>