<!doctype html>
<?php
function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}

function procesaDNI($num)
{
    $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    if ($num <= 9999999 || $num > 99999999) {
        return false;
    } else {
        return $num . $letras[$num % 23];
    }
}
?>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Validación DNI DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Prueba" />

</head>

<body>
    <section>
        <?php
        echo '<form href="./ej1dni.php" method="GET">';
        echo '<input type="text" name="num" placeholder="Introduce el número de tu DNI"/>';
        echo '<input type="submit" name="done" value="Enviar"/></form>';
        if (isset($_GET['done'])) {
            $dni = procesaDNI($_GET['num']);
            if ($dni) {
                echo '<p>Tu DNI es: ' . $dni . '</p>';
            } else if (empty($_GET['num'])) {
                echo '<p>El DNI está vacío</p>';
            } else {
                echo '<p>El DNI con número ' . $_GET['num'] . ' no es válido';
            }
        }
        ?>

    </section>
</body>

</html>