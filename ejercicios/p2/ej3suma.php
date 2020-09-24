<!--
    Autor: David Galván Fontalba
    Fecha: 24 / 9 / 2020
-->

<?php
    $primerValor = 5;
    $segundoValor = 8;
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Suma de dos números DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Suma dos numeros que están almacenados en dos respectivas variables"/>

    </head>
    <body>
        <section>
            <?php 
                echo "<p>La suma de ".$primerValor." y ".$segundoValor." es ".($primerValor+$segundoValor)."</p>";
            ?>
        </section>
    </body>
</html>