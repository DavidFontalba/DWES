<?php
function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}
session_start();

if (!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = false;
    $_SESSION['usuario'] = 'Invitado';
}

if (isset($_POST['done'])) {
    $procesarFormulario = true;
    $vUser = clearData($_POST["usuario"]);
    $vClave = clearData($_POST["clave"]);
    $msgUserError = "";
    $msgClaveError = "";

    if (empty($vUser)) {
        $procesarFormulario = false;
        $msgUserError = "El usuario tiene que ser especificado";
    }
    if (empty($vClave)) {
        $procesarFormulario = false;
        $msgClaveError = "La contraseña tiene que ser especificada";
    }

    if ($procesarFormulario) {
        if ($vUser == 'admin' && $vClave == 'admin') {
            $_SESSION['auth'] = true;
            $_SESSION['usuario'] = 'Administrador';
        }
        if (isset($_POST['recordar'])) {
            setcookie("usuario", $vUser);
            setcookie("clave", $vClave);
        }
    }
}
?>
<!doctype html>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Auth DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Autentificación" />

</head>

<body>
    <section>
        <?php
        echo '<h2>Ejemplo de autentificación</h2>';
        echo '<p>Usted está en el sistema como ' . $_SESSION['usuario'] . '</p>';
        echo '<a href="publica.php" target="_blank">Publico</a> ';
        if ($_SESSION['auth']) {
            echo '<a href="privado.php" target="_blank">Privado</a>
            <a href="cierresesion.php">Salir</a>';
        } else {
            echo '<form href="./ej3formregistro.php" method="POST">';
            echo 'Nombre: ';
            echo '<input type="text" name="usuario" placeholder="Usuario..." value="' . $_COOKIE["usuario"] . '"/> '.$msgUserError;
            echo '<br/>Contraseña: ';
            echo '<input type="text" name="clave" placeholder="Contraseña..." value="' . $_COOKIE["clave"] . '"/> '.$msgClaveError;
            echo '<br/><input type="checkbox" name="recordar" value="1"/>Recordarme<br/>
                <input type="submit" name="done" value="Enviar"/></form>';
        }
        if (isset($_GET['error']) == 1) {
            echo '<p>No tenías permiso para acceder a este recurso, has sido redireccionado.</p>';
        }
        ?>

    </section>
</body>

</html>