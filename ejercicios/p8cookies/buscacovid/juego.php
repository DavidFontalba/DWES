<?php

/**
 * Mostrar tablero auxiliar
 * Función que muestra el tablero de juego y su contenido
 * Crea un enlace en cada casilla de la tabla 
 * enviando por la url fila, columna.
 * Función auxiliar para mostrar durante el desarrollo.
 * No mostrar en producción.
 */
function mostrarTablero()
{
    echo "<table>";
    for ($fila = 0; $fila < TAM; $fila++) {
        echo "<tr>";
        for ($columna = 0; $columna < TAM; $columna++) {
            echo "<td>";
            echo "<a href=\"juego.php?fila=$fila&columna=$columna\">";
            echo $_SESSION['tablero'][$fila][$columna];
            echo "</a></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

/**
 * Mostrar tablero 
 * Función que muestra el tablero de juego e implementa la funcionalidad.
 * Crea un enlace en cada casilla de la tabla y cuyo contenido es un cero.
 */
function mostrarVisible($checked, $haPerdido = false)  // tablero de juego
{
    echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="GET"><table>';
    for ($fila = 0; $fila < TAM; $fila++) {
        echo "<tr>";
        for ($columna = 0; $columna < TAM; $columna++) {
            if ($_SESSION['visible'][$fila][$columna] == 2) {
                echo "<td class='visible-bandera'><a href=\"juego.php?fila=$fila&columna=$columna&check=$checked\"><img style='width:40px' src='./img/stayhome.png'/></a></td>";
            } else if ($_SESSION['visible'][$fila][$columna] == 1) {  //Si la casilla ya está visible
                if ($_SESSION['tablero'][$fila][$columna] == 0) {
                    echo "<td class='visible-vacio'></td>"; //Mostramos vacío
                } else if ($_SESSION['tablero'][$fila][$columna] != 9) {
                    echo "<td class='visible-contador'>" . $_SESSION['tablero'][$fila][$columna] . "</td>"; //Mostramos minas adyacentes.
                } else {
                    echo "<td class='visible-covid'><img src='./img/covid.png'/></td>"; //Mostramos mina.
                }
            } else { // Casilla no visible
                echo "<td class='no-visible'>";
                if ($haPerdido) {
                    echo "<img src='./img/normal.png'/>";
                } else {
                    echo "<a href=\"juego.php?fila=$fila&columna=$columna&check=$checked\"><img src='./img/normal.png'/></a>";
                }
                echo "</td>";
            }
        }
        echo "</tr>";
    }

    if ($checked) {
        echo '<input checked type="checkbox" id="check" name="check" value="1"/>';
    } else {
        echo '<input type="checkbox" id="check" name="check" value="1"/>';
    }
    echo '<label for="check"> Marcar casilla </label><input type="submit" name="enviar" value="Marcar"/></table></form>';
}


/**
 * Crear Tablero
 * Función que genera los dos tableros.
 * El array visible se creará con tadas las casillas ocultas.
 * El tablero se creará generando números aleatorios y calculando el número de minas pegadas a cada casilla
 *  
 */
function crearTablero()
{
    //Inicializa el tablero
    for ($fila = 0; $fila < TAM; $fila++) {
        for ($columna = 0; $columna < TAM; $columna++) {
            $_SESSION['tablero'][$fila][$columna] = 0;
            $_SESSION['visible'][$fila][$columna] = 0;
        }
    }

    //utilizaremos 9 para representar que hay una mina.	
    //Pone diez minas
    for ($n = 0; $n < NUMMINAS; $n++) {
        //Busca una posición aleatoria donde no haya otra bomba
        do {
            $fila    = mt_rand(0, TAM - 1);
            $columna = mt_rand(0, TAM - 1);
        } while ($_SESSION['tablero'][$fila][$columna] == 9);
        //Pone la bomba
        //echo "Ponemos bomba en $fila, $columna <br/>";
        $_SESSION['tablero'][$fila][$columna] = 9;
        //Recorre el contorno de la bomba e incrementa los contadores
        for ($f = max(0, $fila - 1); $f <= min(TAM - 1, $fila + 1); $f++) {
            for ($c = max(0, $columna - 1); $c <= min(TAM - 1, $columna + 1); $c++) {
                if ($_SESSION['tablero'][$f][$c] != 9) { //Si no es bomba
                    $_SESSION['tablero'][$f][$c]++; //Incrementa el contador
                }
            }
        }
    }
}

/**
 * Comprueba ganador
 * Función que verifica que se han terminado el juego sin explotar ninguna mina.
 * Cuenta las casillas visibles y si es igual al número de casillas menos el número de minas
 * el juego ha sido ganado 
 * 
 * @return logico lganador: Falso si se produce una exploxión o true si se ha ganado.
 */
function comGanador()
{
    $lganador = false;
    $numOcultos = 0;
    $numVisibles = 0;
    foreach ($_SESSION['visible'] as $ind => $valF) {
        foreach ($valF as $ind2 => $valor) {
            if ($valor == 0) {
                $numOcultos++;
            } else {
                $numVisibles++;
            }
        }
    }
    if ($numVisibles == NUMCASILLAS - NUMMINAS) {
        $lganador = true;
    }
    return $lganador;
}


/**
 * Pulsar casilla.
 * Función que implementa la funcionalidad del juego.
 * Se pulsa sobre un enlace, se envían por la url la fila y la columna y se genera
 * una llamada recursiva para ir destapando casillas.
 * 
 * @param integer f fila
 * @param integer c columna
 * @return int -1 pierde, 0 click normal, 1 gana
 */
function clicCasilla($f, $c)
{
    /*Si la casilla esta oculta */
    if ($_SESSION['visible'][$f][$c] == 0) {
        /*Destapamos casilla*/
        $_SESSION['visible'][$f][$c] = 1;
        return 0;
        /*Comprobamos mina; break recursividad */
        if ($_SESSION['tablero'][$f][$c] == 9) {
            return -1;
        } else {
            /*Comprobamos ganador */
            if (comGanador()) {
                /*Detapadas todas las casillar; break recursividad*/
                return 1;
            } else {
                /*Si no hay minas cercanas */
                if ($_SESSION['tablero'][$f][$c] == 0) {
                    /*Recorre las casillas cercanas y tambien las ejecuta*/
                    for ($if = max(0, $f - 1); $if <= min(TAM - 1, $f + 1); $if++) {
                        for ($ic = max(0, $c - 1); $ic <= min(TAM - 1, $c + 1); $ic++) {
                            clicCasilla($if, $ic);
                        }
                    }
                }
            }
        }
        return 0;
    }
}

/*FIN DECLARACIÓN DE FUNCIONES*/

/*Definición de constantes.*/
define("TAM", 10);
define("NUMMINAS", 10);
define("NUMCASILLAS", TAM * TAM);
$resultado = "";
//Inicio y definición de sesión y variables.
session_start();

if (!isset($_SESSION['tablero'])) {
    $_SESSION['tablero'] = array();
    $_SESSION['visible'] = array();
    crearTablero();
}
/* Desarrollo de la jugada */
$checked = false;
if (isset($_GET["check"]) && $_GET["check"] == 1) {
    $checked = true;
    switch ($_SESSION['visible'][$_GET['fila']][$_GET['columna']]) {
        case 0:
            $_SESSION['visible'][$_GET['fila']][$_GET['columna']] = 2;
            break;
        
        case 2:
            $_SESSION['visible'][$_GET['fila']][$_GET['columna']] = 0;
            break;
    }
    
} else if (isset($_GET['fila'])) {
    $filEntrada = $_GET['fila'];
    $colEntrada = $_GET['columna'];
    $resultado = clicCasilla($filEntrada, $colEntrada) ?? "";
}

?>
<!doctype html>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Buscaminas DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Buscaminas" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    echo '<div class="reiniciar"><a href="cerrarsesion.php">Reiniciar</a></div>';
    //mostrarTablero();
    echo "<br/>";
    if ($resultado == -1) { //pierde
        mostrarVisible($checked, true);
        echo "<p>¡Perdiste!</p>";
    } else {
        mostrarVisible($checked);
        if ($resultado == 1) { //gana
            echo "<p>¡Felicidades, has ganado!</p>";
        }
    }
    ?>
</body>

</html>