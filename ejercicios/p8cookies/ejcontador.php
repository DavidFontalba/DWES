<?php
session_start();
if (isset($_POST["send"])) {
    if ((time() - $_SESSION["horaInicio"]) > 10) {
        unset($_SESSION["count"]);
        unset($_SESSION["horaInicio"]);
        session_destroy();
        session_start();
        session_regenerate_id();
    } else {
        $_SESSION["count"]++;
    }
}
if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
}
if (!isset($_SESSION["horaInicio"])) {
    $_SESSION["horaInicio"] = time();
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
        echo "<form action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\" method=\"POST\"><input type=\"submit\" name=\"send\" value=\"Contar\"></input></form>";
        ?>

    </section>
</body>

</html>