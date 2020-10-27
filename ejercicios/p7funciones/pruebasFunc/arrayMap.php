<!doctype html>
<html lang="es">

<head>
    <link rel="icon" href="" alt="">
    <title>ArrayMap DF</title>
    <meta charset="utf-8">
    <meta name="author" content="David Galván Fontalba" />
    <meta name="description" content="Prueba" />

</head>

<body>
    <section>
        <?php
        $array = [2, 7, 3];
        $cuadrados = array_map(function ($cuadrado) {
            return $cuadrado ** 2;
        }, $array);
        print_r($cuadrados);
        ?>

    </section>
</body>

</html>