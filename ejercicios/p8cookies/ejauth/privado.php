<?php
session_start();
$aut = $_SESSION['auth'] ?? false;
if (!$aut) {
    header('Location: ejauth.php?error=1');
}
?>
<!DOCTYPE html>
<!--
-->
<html lang="es">
    <head>
        <meta name="author" content="David Galván Fontalba"/>
        <meta charset="utf8"/>
        <title>Privada</title>
    </head>
    <body>
        <p>Privada</p>
    </body>
</html>