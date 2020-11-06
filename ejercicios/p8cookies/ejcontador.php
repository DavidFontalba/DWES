<?php
function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}

session_start();
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
}
if (!isset($_SESSION["horaInicio"])) {
    $_SESSION["horaInicio"] = time();
}
if (isset($_POST["send"])) {
    if ((time() - $_SESSION["horaInicio"]) > 30) {
        $_SESSION["horaInicio"] = time();
        $_SESSION["count"] = 0;
    } else {
        $_SESSION["count"] = $_SESSION["count"] + 1;
    }
}

?>
<!doctype html>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Contador DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Contador" />

</head>

<body>
    <section>
        <?php
        echo "<p>" . $_SESSION['count'] . "</p>";
        echo "<form action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\" method=\"POST\"><input type=\"submit\" name=\"send\" value=\"Contar\"></input></form>";
        ?>

    </section>
</body>

</html>