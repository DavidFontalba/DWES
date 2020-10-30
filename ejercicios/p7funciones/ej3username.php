<!doctype html>
<?php
$aUsuarios = array(

    array('nombre' => 'Jesús', 'apellido1' => 'Martínez', 'apellido2' => 'García'),

    array('nombre' => 'Mercedes', 'apellido1' => 'Calamaro', 'apellido2' => 'Pedrajas'),

    array('nombre' => 'Elena', 'apellido1' => 'Pérez', 'apellido2' => ''),

);

function normalize($string)
{
    $badChars = 'ÁÉÍÓÚáéíóú';
    $goodChars = 'AEIOUaeiou';
    $string = strtr(utf8_decode($string), utf8_decode($badChars), $goodChars);
    return utf8_encode(strtolower($string));
}
?>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Creación de nombre de usuario DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Dos primeros digitos de apellidos e inicial del nombre" />

</head>

<body>
    <section>
        <?php
        array_map(function ($user) {
            echo '<p>' . $user['nombre'] . " " . $user['apellido1'] . " " . $user['apellido2'] . ": ";
            echo substr(normalize($user['apellido1']), 0, 2) . substr(normalize($user['apellido2']), 0, 2) . substr(normalize($user['nombre']), 0, 1) . '</p>';
        }, $aUsuarios);
        ?>

    </section>
</body>

</html>