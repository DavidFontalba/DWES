<?php
session_start();
if (($_SESSION['user'] == 'agente1') or ($_SESSION['user'] == 'agente2')) {
} else {
    header("Location: ../index.php");
}

function creaListaDeMultas()
{
    if (empty($_SESSION['multas'])) {
        echo '<p>Ahora mismo no hay ninguna multa</p>';
    } else {
        echo '<table><tr><td scope="col">Matrícula</td><td scope="col">Descripción</td><td scope="col">Fecha</td><td scope="col">Importe</td><td scope="col">Estado</td><td></td></tr>';
        foreach ($_SESSION['multas'] as $arrayMulta) {
            echo '<tr>';
            foreach ($arrayMulta as $key => $value) {
                if ($key != 'idAgente') echo '<td>' . $value . '</td>';
            }
            if ($arrayMulta['estado'] == "Pendiente") {
                echo '<td><a href="./scripts/pagamulta.php?idMulta=' . array_search($arrayMulta, $_SESSION['multas']) . '">Pagar</a></td></tr>';
            }
        }
        echo '</table>';
    }
}
?>
<!DOCTYPE html>
<!--
-->
<html lang="es">

<head>
    <meta name="author" content="David Galván Fontalba" />
    <meta charset="utf8" />
    <title>Agente - Examen 2 DF</title>
</head>

<body>
    <h1>Gestión de Multas</h1>
    <nav>
        <a href="../index.php">Salir</a>;
        <a href="../scripts/nuevaMulta.php">Nueva multa</a>;
    </nav>

    <?creaListaDeMultas();?>
</body>

</html>