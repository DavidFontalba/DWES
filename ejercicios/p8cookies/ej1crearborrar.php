<?php
if (isset($_COOKIE["user"])) { //Si existe la borramos
    setcookie("user", "Edgar Allan Poe", time() - 3600);
} else { //Si no, la escribimos.
    setcookie("user", "Edgar Allan Poe", time() + 3600);
}
?>
<!doctype html>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Cookies 1 DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Cookies" />

</head>

<body>
    <section>
        <?php
        if (isset($_COOKIE["user"])) {
            echo "Buenas " . $_COOKIE["user"];
        } else {
            echo "No estás registrado";
        }
        ?>

    </section>
</body>

</html>