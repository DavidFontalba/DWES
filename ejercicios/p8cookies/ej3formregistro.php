<?php
function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}

if (isset($_POST['done'])) {
    if (isset($_POST['recordar'])) {
        setcookie("usuario", $_POST["usuario"]);
        setcookie("clave", $_POST["clave"]);
    } else {
        setcookie("usuario", $_POST["usuario"], time() - 3600);
        setcookie("clave", $_POST["clave"], time() - 3600);
    }
}

$usuario = $_COOKIE["usuario"] ?? "";
$clave = $_COOKIE["clave"] ?? "";
?>
<!doctype html>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Ej 3 DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Cookies" />

</head>

<body>
    <section>
        <?php
        echo '<form href="./ej3formregistro.php" method="POST">';

        echo 'Nombre: ';
        echo '<input type="text" name="usuario" placeholder="Usuario..." value="' . $_COOKIE["usuario"] . '"/>';


        echo '<br/>Contraseña: ';
        echo '<input type="text" name="clave" placeholder="Contraseña..." value="' . $_COOKIE["clave"] . '"/>';


        echo '<br/><input type="checkbox" name="recordar" value="1"/>Recordarme<br/>
            <input type="submit" name="done" value="Enviar"/></form>';
        ?>

    </section>
</body>

</html>