<!doctype html>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>Estáticas DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Prueba" />

</head>

<body>
    <section>
        <?php function manejoVariableEstaticas()
        {
            static $varEstatica = 0;
            $variable = 0;
            $varEstatica++;
            $variable++;
            echo "<p>" . $varEstatica . "\n" . $variable;
        }
        echo "<p>Llamada 1</p>";
        manejoVariableEstaticas();
        echo "<p>Llamada 2</p>";
        manejoVariableEstaticas();
        echo "<p>Llamada 3</p>";
        manejoVariableEstaticas();
        ?>

    </section>
</body>

</html>