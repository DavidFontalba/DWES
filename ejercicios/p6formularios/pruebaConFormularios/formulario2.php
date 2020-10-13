<?php

/**
 * Autor: David Galván Fontalba
 * Fecha: 13 / 10 / 2020
 */
$formulario = array(
    "nombre" => array("text", "Nombre", ""),
    "apellidos" => array("text", "Apellidos", ""),
    "enviar" => array("submit", NULL, "Enviar")
);
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
        <form action="procesaFormulario1.php" method="GET">
            <?php
            foreach ($formulario as $name => $array) {
                if ($array[1] != NULL) {
                    echo '<input type="'.$array[0].'" name="'.$name.'" placeholder="'.$array[1].'" value="'.$array[2].'"/>';
                } else {
                    echo '<input type="'.$array[0].'" name="'.$name.'" value="'.$array[2].'"/>';
                }
            }
            ?>
        </form>

    </section>
</body>

</html>