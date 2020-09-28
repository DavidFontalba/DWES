<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 24 / 9 / 2020
 */
    $valorActual = 8;
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Variable que va cambiando DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Variable cuyo contenido varia."/>

    </head>
    <body>
        <section>
            <?php 
                echo "<p>Valor actual ".$valorActual.".</p>";
                echo "<p>Suma 2. Valor ahora ".($valorActual+=2).".</p>";
                echo "<p>Resta 4. Valor ahora ".($valorActual-=4).".</p>";
                echo "<p>Multiplica por 5. Valor ahora ".($valorActual*=5).".</p>";
                echo "<p>Divide por 3. Valor ahora ".($valorActual/=3).".</p>";
                echo "<p>Incrementa el valor en 1. Valor ahora ".++$valorActual.".</p>";
                echo "<p>Decrementa el valor en 1. Valor ahora ".$valorActual--.".</p>";
            ?>
        </section>
    </body>
</html>