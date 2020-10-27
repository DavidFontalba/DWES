<!doctype html>
<?php
function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}
function sumaDigitos($num)
{
    $resultado = 0;
    if (strlen($num) > 1) {
        $resultado += sumaDigitos(array_sum(str_split($num)));
    } else {
        return $num;
    }
    return $resultado;
}

?>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Suma dígitos DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Prueba" />

</head>

<body>
    <section>
        <?php
        if (!isset($_GET['done'])) {
            echo '<form href="./ej1dni.php" method="GET">';
            echo '<input type="text" name="num" placeholder="Introduce un número"/>';
            echo '<input type="submit" name="done" value="Enviar"/></form>';
        } else {
            $suma = sumaDigitos(clearData($_GET['num']));
            if ($suma) {
                echo '<p>La suma de los dígitos de: ' . $$_GET['num'] . ' es ' . $suma . '</p>';
            }
        }
        ?>

    </section>
</body>

</html>