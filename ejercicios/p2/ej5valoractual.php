<!--
    Autor: David Galván Fontalba
    Fecha: 24 / 9 / 2020
-->

<?php
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
                echo "<p>Suma 2. Valor actual ".($valorActual+=2).".</p>";
                echo "<p>Resta 4. Valor actual ".($valorActual-=4).".</p>";
                echo "<p>Multiplica por 5. Valor actual ".($valorActual*=5).".</p>";
                echo "<p>Divide por 3. Valor actual ".($valorActual/=3).".</p>";
            ?>
        </section>
    </body>
</html>