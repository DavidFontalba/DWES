<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 13 / 10 / 2020
 * 
 * Define un array que permita almacenar y mostrar la siguiente información.
 * Meses del año.
 * Tablero para jugar al juego de los barcos.
 * Nota de los alumnos de 2º DAW para el módulo DWES.
 * Verbos irregulares en inglés.
 * Información sobre continentes, países, capitales y banderas.
 */
$unoADiez = array("1","2","3","4","5","6","7","8","9","10");

$info = array("Meses del año" => array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", 
                                        "Octubre", "Noviembre", "Diciembre"),

            "Tablero para jugar al juego de los barcos" => array("A"=> new ArrayObject($unoADiez), "B"=> new ArrayObject($unoADiez),
                                                                "C"=> new ArrayObject($unoADiez), "D"=> new ArrayObject($unoADiez),
                                                                "E"=> new ArrayObject($unoADiez), "F"=> new ArrayObject($unoADiez),
                                                                "G"=> new ArrayObject($unoADiez), "H"=> new ArrayObject($unoADiez),
                                                                "I"=> new ArrayObject($unoADiez), "J"=> new ArrayObject($unoADiez),),

            "Notas de alumnos de 2º DAW en DWES" => array("Alumno 1" => 10, "Alumno 2" => 5, "Alumno 3" => 8, "Alumno 4" => 4,
                                                        "Alumno 5" => 7, "Alumno 6" => 6, "Alumno 7" => 2, "Alumno 8" => 5),

            "Verbos irregulares en inglés" => array("arise","awake","be","bear","beat","become","begin",
                                                    "bend","bet","bind","bite","bleed","break","breed",
                                                    "bring","broadcast","build","burn","burst", "buy",
                                                    "can", "catch", "choose", "cling", "come", "cost",
                                                    "creep","cut","deal","dig", "do", "draw", "dream"),

            "Información sobre continentes, países, capitales y banderas" => array( 
                "Europa" => array("España" => array("Madrid", "img/es.webp"), 
                                "Francia" => array("Paris", "img/fr.webp"),
                                "Grecia" => array("Atenas", "img/gr.webp")),
                "Asia" => array("China" => array("Pekín", "img/cn.webp"),
                                "Japón" => array("Tokio", "img/jp.webp")),
                "América" => array("México" => array("Ciudad de México", "img/mx.webp")),
            ));
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Array con información DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Define un array que permita almacenar y mostrar la siguiente información.."/>

    </head>
    <body>
        <section>
            <?php 
                foreach ($info as $title => $array) {
                    if ($title == "Meses del año" || $title == "Verbos irregulares en inglés") {
                        echo "<h3>".$title."</h3><ul>";
                        foreach ($array as $valor) {
                            echo "<li>".$valor."</li>";
                        }
                        echo "</ul>";

                    } else if ($title == "Tablero para jugar al juego de los barcos") {
                        echo "<h3>".$title."</h3>";
                        echo '<table style="border: black 1px solid">';
                        echo '<tr><td></td>';

                        for ($i = 1; $i <= 10; $i++) {
                            echo '<td scope="col" style="border: black 1px solid">'.$i.'</td>';
                        }

                        foreach ($array as $letra => $arrayNums) {
                            echo '<tr><td scope="row" style="border: black 1px solid">'.$letra.'</td>';
                            foreach ($arrayNums as $num) {
                                echo '<td style="border: black 1px solid">'.$letra.$num."</td>";
                            }
                            echo "</tr>";
                        }

                        echo "</table>";

                    } else if ($title == "Notas de alumnos de 2º DAW en DWES") {
                        echo "<h3>".$title."</h3><ul>";
                        foreach ($array as $alumno => $nota) {
                            echo "<li>".$alumno." : ".$nota."</li>";
                        }
                        echo "</ul>";

                    } else { //Continentes y países
                        echo "<h3>".$title."</h3>";
                        foreach ($array as $continente => $paises) {
                            echo '<table style="border: black 1px solid">';
                            echo '<tr><td style="border: black 1px solid">'.$continente.'</td></tr><tr>';
                            foreach ($paises as $pais => $infoPais) {
                                echo '<td style="border: black 1px solid">'.$infoPais[0].'</td>';
                                echo '<td style="border: black 1px solid"><img src="'.$infoPais[1].'"/></td></tr><tr>';
                            }
                            echo '</tr></table>';
                        }
                    }
                }
            ?>
        </section>
    </body>
</html>