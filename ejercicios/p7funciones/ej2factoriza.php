<!doctype html>
<?php
function clearData($cadena)
{
    return stripslashes(htmlspecialchars(trim($cadena)));
}

function isPrime($num) {
    if($num == 1)
        return false;

    if($num == 2)
        return true;

    if($num % 2 == 0) {
        return false;
    }

    $ceil = ceil(sqrt($num));
    for($i = $ceil; $i >= 3; $i -= 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}

function factoriza($num)
{
    do {
        $primo = 2;
        while (!(is_integer($num / $primo) && isPrime($primo))) {
            if ($primo == 2) {
                $primo++;
            } else {
                $primo += 2;
            }
        }
        echo "<p>" . $num . "|" . $primo . "</p>";
        $num = $num / $primo;
    } while ($num != 1);
    echo "<p>" . $num . "|</p>";
}

?>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Factoriza DF</title>
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
            factoriza(clearData($_GET['num']));
        }
        ?>

    </section>
</body>

</html>