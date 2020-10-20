<?php

/**
 * Autor: David Galván Fontalba
 * Fecha: 13 / 10 / 2020
 */
$formulario = array(
    "nombre" => array("text", "Nombre", ""),
    "apellidos" => array("text", "Apellidos", ""),
    "mail" => array("text", "Mail", ""),
    "enviar" => array("submit", NULL, "Enviar")
);

function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}

?>

<!doctype html>
<html lang="es">

<head>
    <!-- <link rel="icon" href="" alt=""> -->
    <title>Prueba DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Pruebas con arrays" />

</head>

<body>
    <section>
        <?php
        //Datos iniciales
        $todoOk = false;
        $nombre = $apellidos = $mail = "";
        $msgErrorNombre = $msgErrorApellidos = $msgErrorMail = "";

        //Validación
        if (isset($_POST['enviar'])) {
            $nombre = clearData($_POST['nombre']);
            $apellidos = clearData($_POST['apellidos']);
            $mail = clearData($_POST['mail']);
            $todoOk = true;
            if (empty($nombre)) {
                $msgErrorNombre = "Nombre requerido";
                $todoOk = false;
            }
            if (empty($apellidos)) {
                $msgErrorApellidos = "Apellido requerido";
                $todoOk = false;
            }
            if (empty($mail)) {
                $msgErrorMail = "Mail requerido";
                $todoOk = false;
            }
        }

        if ($todoOk) {
            echo $nombre . " " . $apellidos . "<br/>" . $mail;
        } else {
            echo '<form action ="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
            foreach ($formulario as $name => $array) {
                if ($array[1] != NULL) {
                    echo '<input type="' . $array[0] . '" name="' . $name . '" placeholder="' . $array[1] . '" value="' . $array[2] . '"/>';
                } else {
                    echo '<input type="' . $array[0] . '" name="' . $name . '" value="' . $array[2] . '"/>';
                }
            }
        }
        ?>
        </form>

    </section>
</body>

</html>