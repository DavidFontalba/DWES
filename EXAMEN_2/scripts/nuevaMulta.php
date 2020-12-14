<?php
session_start();
if (($_SESSION['user'] == 'agente1') or ($_SESSION['user'] == 'agente2')) {
} else {
    header("Location: ../index.php");
}
if (isset($_POST['nuevaMulta'])) {
    //Ejemplo de multa ["idAgente"= , "matricula"=, "descripcion"=, "fecha"=, "importe"=, "estado"=]
    array_push(
        $_SESSION['multas'],
        [
            "idAgente" => array_search($_SESSION['myUserArray'], $_SESSION['allUsers']),
            "matricula" => $_POST['matricula'],
            "descripcion" => $_POST['desc'],
            "fecha" => $_POST['fecha'],
            "importe" => $_POST['imp'],
            "estado" => "Pendiente"
        ]
    );
    header("Location: ../agente/agente.php");
}
?>
<!DOCTYPE html>
<!--
-->
<html lang="es">

<head>
    <meta name="author" content="David Galván Fontalba" />
    <meta charset="utf8" />
    <title>Nueva Multa - Examen 2 DF</title>
</head>

<body>
    <form action="<?htmlspecialchars($_SERVER[" PHP_SELF"])?>" method="POST">
        <label for="matricula">Matricula: </label><input type="text" id="matricula" name="matricula">
        <label for="desc">Descripción: </label><input type="text" id="desc" name="desc">
        <label for="fecha">Fecha: </label><input type="date" id="fecha" name="fecha">
        <label for="imp">Importe: </label><input type="text" id="imp" name="imp">
        <input type="submit" name="nuevaMulta" value="Guardar multa">
    </form>
</body>

</html>