<?php
session_start();
if ($_SESSION['user'] == 'admin') {
} else {
    header("Location: ../index.php");
}
function sortFunction($a, $b)
{
    return strtotime($a['fecha']) - strtotime($b['fecha']);
}



function creaListaDeMultas()
{
    if (empty($_SESSION['multas'])) {
        echo '<p>Ahora mismo no hay ninguna multa</p>';
    } else {
        $multasTemp = $_SESSION['multas'];
        usort($multasTemp, "sortFunction");


        echo '<table><tr><td scope="col">Año</td><td scope="col">Total</td></tr>';
        $year = 0;
        $sum = 0;
        foreach ($multasTemp as $arrayMulta) {
            if (getYear($arrayMulta['fecha']) != $year) {
                $sum = 0;
                $year = getYear($arrayMulta['fecha']);
                echo '</tr><tr><td>'.$year.'</td>';
            } else {
                $sum += $arrayMulta['importe'];
            }
        }
        echo '</tr></table>';

        //No me ha dado tiempo a terminar.....
    }
}
function getYear($pdate) {
    $date = DateTime::createFromFormat("Y-m-d", $pdate);
    return $date->format("Y");
}
?>
<!DOCTYPE html>
<!--
-->
<html lang="es">

<head>
    <meta name="author" content="David Galván Fontalba" />
    <meta charset="utf8" />
    <title>Admin - Examen 2 DF</title>
</head>

<body>
    <h1>Resumen de Multas</h1>
    <a href="../index.php">Salir</a>;

    <?php
    creaListaDeMultas();
    ?>
</body>

</html>