<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 2 / 10 / 2020
 */
    $month = 10;
    $year = 2020;
    $today = date("d.m.Y");

?>

<!doctype html>
<html lang="es">
    <head>
        <link rel="icon" href="" alt="">
        <title>Calendario DF</title>
        <meta charset="utf-8">
        <meta name="author" content="David Galván Fontalba"/>
        <meta name="description" content="Muestro un calendario en el que se marca el día actual y festivos"/>
        <link rel="stylesheet" href="css/styleForCalendar.css">

    </head>
    <body>
        <section>
            <?php 
                echo "<h3> Mes ".$month." del año ".$year."</h3>";
                echo "<table>";

                echo "<tr><td scope='col'>D</td>";
                echo "<td scope='col'>L</td>";
                echo "<td scope='col'>M</td>";
                echo "<td scope='col'>X</td>";
                echo "<td scope='col'>J</td>";
                echo "<td scope='col'>V</td>";
                echo "<td scope='col'>S</td></tr>";

                //Averiguamos en qué día de la semana cae el 1 del mes elegido.
                $dayOne = new DateTime("1-".$month."-".$year);
                $startOn = $dayOne->format("w"); //Nos devolverá del 0 al 6, siendo 0 domingo y 6 sábado
                
                //Averiguamos el número de días que tiene el mes
                //Febrero
                if ($month == 2) {
                    if ($year/4 == (int)($year/4) ) {
                        if ($year/100 != (int)($year/100) || $year/400 == (int)($year/400)) {
                          $numOfDays = 29;
                        }
                      } else {
                        $numOfDays = 28;
                      }
                //monthes de 31
                } else if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || 
                $month == 8 || $month == 10 || $month == 12) {
                    $numOfDays = 31;
                //monthes de 30
                } else {
                    $numOfDays = 30;
                }
                
                //Saltamos los días del mes anterior
                echo "<tr>";
                if ($startOn != 0) { //Si es 0 no hay que poner espacios, nos saltamos esta parte.
                    for ($x = 0; $x < $startOn; $x++) {
                        echo "<td></td>";
                    }
                }
                
                
                //Construimos el calendario
                $counter = $startOn; //Para contar los días que estamos poniendo
                for ($i = 1; $i <= $numOfDays; $i++) {
                    if (date("d.m.Y") == $i.".".$month.".".$year || // ¡Es hoy!
                        date("d.m.Y") == "0".$i.".".$month.".".$year) { 
                        echo "<td style='background-color:green'>".$i."</td>"; 

                    } else if ($counter == 0) { //Domingo, festivo, por tanto irá rojo
                        echo "<td style='background-color:red'>".$i."</td>"; 

                    } else {
                        echo "<td>".$i."</td>";
                    }


                    if ($counter++ == 6) { //Si llegamos a sábado, en nuestro caso, saltamos de línea
                        echo "</tr><tr>";
                        $counter = 0;
                    }


                }
                echo "</tr>";
                echo "</table>";
            ?>
        </section>
    </body>
</html>