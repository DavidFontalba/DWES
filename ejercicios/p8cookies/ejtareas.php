<?php
function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}
session_start();
if (isset($_POST['clear'])) {
    unset($_SESSION["tareas"]);
    session_destroy();
    session_start();
    session_regenerate_id(true);
}

if (!isset($_SESSION['tareas'])) {
    $_SESSION['tareas'] = [];
}

if (isset($_POST['send'])) {
    $procesarFormulario = true;
    $vFecha = clearData($_POST['fecha']);
    $vTarea = clearData($_POST['tarea']);
    $msgFechaError = "";
    $msgTareaError = "";
    if (empty($vFecha)) {
        $procesarFormulario = false;
        $msgFechaError = "La fecha tiene que ser especificada";
    }
    if (empty($vTarea)) {
        $procesarFormulario = false;
        $msgTareaError = "La tarea tiene que ser especificada";
    }
}



?>
<!doctype html>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Tareas DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Apuntar lista de tareas"/>

</head>

<body>
    <section>
        <?php
        echo "<form action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\" method=\"POST\">
        <label>Fecha: </label><input type=\"text\" name=\"fecha\"></input><label>".$msgFechaError."</label><br/>
        <label>Tarea: </label><input type=\"text\" name=\"tarea\"></input><label>".$msgTareaError."</label><br/>
        <input type=\"submit\" name=\"send\" value=\"Añadir\"></input><br/>
        <input type=\"submit\" name=\"clear\" value=\"Limpiar agenda\"></input></form><ul>";
        if ($procesarFormulario) {
            $_SESSION['tareas'][] = ["fecha"=>$vFecha, "tarea"=>$vTarea];
            foreach ($_SESSION["tareas"] as $key => $value) {
                echo "<li>".$value["fecha"]." --- ".$value["tarea"]."</li>";
            }
        }
        echo "</ul>";
        ?>

    </section>
</body>

</html>