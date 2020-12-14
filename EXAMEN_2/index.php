<?php
session_start();

if (!isset($_SESSION['user'])) {
    //Perfil de usuario actual
    $_SESSION['user'] = 'invitado';

    //Todos los usuarios "registrados" en nuestra plataforma
    $_SESSION['allUsers'] = [
        ["admin", "admin", "Administrador", "administrador"],
        ["agente1", "agente1", "Agente 1", "agente"],
        ["agente2", "agente2", "Agente 2", "agente"]
    ];
    //Array donde serán introducidas las multas
    //Ejemplo de multa ["idAgente"= , "matricula"=, "descripcion"=, "fecha"=, "importe"=, "estado"=]
    $_SESSION['multas'] = [];
}

$errorEnLog = false;
if (isset($_POST['enviar'])) {
    foreach ($_SESSION['allUsers'] as $usuario) {
        if ($_POST['user'] == $usuario[0] && $_POST['pwd'] == $usuario[1]) {
            $_SESSION['user'] = $usuario[0];
            $_SESSION['myUserArray'] = $usuario;
        } else {
            $errorEnLog = true;
        }
    }
}

function creaNav()
{
    echo '<h2>Bienvenido, ' . $_SESSION['myUserArray'][2] . '</h2>';
    echo '<a href="./scripts/salir.php">Salir</a>';
    echo '<nav><a href="#">Home</a> ';
    if ($_SESSION['user'] == "admin") {
        echo '| <a href="./admin/admin.php">Resumen Multas</a>';
    } else {
        echo '| <a href="./agente/agente.php">Gestión Multas</a>';
    }
    echo '</nav>';
}
function creaListaDeMultas()
{
    if (empty($_SESSION['multas'])) {
        echo '<p>Ahora mismo no hay ninguna multa</p>';
    } else {
        echo '<table><tr><td scope="col">Matrícula</td><td scope="col">Descripción</td><td scope="col">Fecha</td><td scope="col">Importe</td><td scope="col">Estado</td><td></td></tr>';
        foreach ($_SESSION['multas'] as $arrayMulta) {
            echo '<tr>';
            foreach ($arrayMulta as $key => $value) {
                if ($key != 'idAgente') echo '<td>' . $value . '</td>';
            }
            if ($arrayMulta['estado'] == "Pendiente") {
                echo '<td><a href="./scripts/pagamulta.php?idMulta=' . array_search($arrayMulta, $_SESSION['multas']) . '">Pagar</a></td></tr>';
            }
        }
        echo '</table>';
    }
}
?>
<!DOCTYPE html>
<!--
-->
<html lang="es">

<head>
    <meta name="author" content="David Galván Fontalba" />
    <meta charset="utf8" />
    <title>Examen 2 DF</title>
</head>

<body>
    <h1>Multas</h1>
    <?php
    if ($_SESSION['user'] == 'invitado') {
        //Formulario de login
    }

    switch ($_SESSION['user']) {
        case 'invitado':
            //Formulario de login
            if ($errorEnLog) {
                echo '<p>Los datos introducidos no tuvieron coincidencias con ningún usuario.</p>';
            }
            echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
            echo '<label for="user">Usuario: </label><input type="text" id="user" name="user"/><br/>';
            echo '<label for="pwd">Contraseña: </label><input type="text" id="pẁd" name="pwd"/><br/>';
            echo '<input type="submit" name="enviar" value="Entrar"/></form>';
            break;

        default:
            // Agentes y administradores
            creaNav();

            break;
    }

    //Lista de multas
    creaListaDeMultas();
    ?>
</body>

</html>