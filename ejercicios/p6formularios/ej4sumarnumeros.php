<?php

/**
 * Autor: David Galván Fontalba
 * Fecha: 13 / 10 / 2020
 */
$formulario = array(
    "nums" => array("text", "n1, n2, n3, ...", ""),
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
    <title>Sumar números DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Suma números introducidos en un formulario" />

</head>

<body>
    <section>
        <?php
        //Datos iniciales
        $todoOk = false;
        $nums = "";
        $msgErrorNums = "";

        //Validación
        if (isset($_POST['enviar'])) {
            $nums = clearData($_POST['nums']);
            $todoOk = true;
            $nums = explode(",", $nums);
            foreach ($nums as $num) {
                if (!is_numeric($num)) {
                    $msgErrorNums = "Algún número mal introducido o campo vacío";
                    $todoOk = false;
                }
            }
        }


        echo '<form action ="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
        echo "<h3>Introduce números separados por comas</h3>";
        foreach ($formulario as $name => $array) {
            if ($array[1] != NULL) {
                echo '<input type="' . $array[0] . '" name="' . $name . '" placeholder="' . $array[1] . '" value="' . $array[2] . '"/>' . $msgErrorNums . '<br/>';
            } else {
                echo '<input type="' . $array[0] . '" name="' . $name . '" value="' . $array[2] . '"/>';
            }
        }

        if ($todoOk) {
            $sum = 0;
            foreach ($nums as $num) {
                $sum += $num;
            }
            echo "<p>La suma de los números introducidos es: " . $sum . '</p>';
        }

        ?>
        </form>

    </section>
</body>

</html>