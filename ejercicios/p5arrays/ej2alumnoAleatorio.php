<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 13 / 10 / 2020
 */
$alumnos = array("David Galván Fontalba", "Alumno 2", "Alumno 3", "Alumno 4", "Alumno 5", "Alumno 6", "Alumno 7");
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Alumnos aleatorios DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de ellos."/>

    </head>
    <body>
        <section>
            <?php 
               echo "<p>".$alumnos[rand(0, sizeof($alumnos)-1)]."</p>";
            ?>
        </section>
    </body>
</html>