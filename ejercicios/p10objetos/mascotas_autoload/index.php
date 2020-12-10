<?php
require_once 'vendor/autoload.php';

use App\Models\{Persona, Perro};

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="author" content="David Galván Fontalba" />
    <meta charset="utf8" />
    <title>Prueba composer</title>
</head>

<body>
    <?php
    $perro = new Perro("Jade", "Crema");
    $persona = new Persona("David", "Galván", "Fontalba");

    $perro->ladra();
    $persona->saluda();
    ?>
</body>

</html>