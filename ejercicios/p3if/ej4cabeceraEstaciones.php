<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 27 / 9 / 2020
 */
    $now = new DateTime(date("d.m.Y"));
    $month = $now->format("m");
    $day = $now->format("d");
?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Estaciones DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Cabecera cambiante en funcion de la estación."/>

    </head>
    <body>
        <header>
            <?php 
                // Invierno
                if (($month == "01" || $month == "02") || //Enero y febrero, son seguro.
                ($mont == "12" && $day >= "21") || //Diciembre, mayor o igual al día 21.
                ($month == "3" && $day <= "20")) { //Marzo, menor o igual al día 20
                    echo '<img src="./img/invierno.png">';
                } // Primavera
                else if (($month == "04" || $month == "05") || //Abril y mayo, son seguro
                ($month == "03" && $day > "20") ||  //Marzo si es más del día 20
                ($month == "06" && $day <= "20")) {  //Junio si es el día 20 o menos.
                    echo '<img src="./img/primavera.png">';
                } // Verano
                else if (($month == "07" || $month == "08") || //Julio y agosto, son seguro
                ($month == "06" && $day > "20") ||  //Junio si es más del día 20
                ($month == "09" && $day <= "22")) {  //Septiembre si es el día 22 o menos.
                    echo '<img src="./img/verano.png">';
                } else { 
                    echo '<img src="./img/otoño.png">';
                }
                switch ($now->format("w")) {
                    case 0: //Domingo
                        echo '<img src="./img/d.png" width="100px">';
                        break;
                    case 1:
                        echo '<img src="./img/l.png" width="100px">';
                        break;
                    case 2:
                        echo '<img src="./img/m.png" width="100px">';
                        break;
                    case 3:
                        echo '<img src="./img/x.png" width="100px">';
                        break;
                    case 4:
                        echo '<img src="./img/j.png" width="100px">';
                        break;
                    case 5:
                        echo '<img src="./img/v.png" width="100px">';
                        break;
                    case 6:
                        echo '<img src="./img/s.png" width="100px">';
                        break;
                }
                
            ?>
        </header>
        <section>
            
        </section>
    </body>
</html>