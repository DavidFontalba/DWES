<?php
/**
 * Autor: David Galván Fontalba
 * Fecha: 13 / 10 / 2020
 */
if (!isset($_POST['enviar'])) {
    header('Location: formulario2.php');
} else {
    echo $_POST['nombre']." ".$_POST['apellidos'];
}
?>