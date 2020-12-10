<?php
session_start();
unset($_SESSION["tablero"]);
unset($_SESSION["visible"]);
session_destroy();
session_start();
session_regenerate_id(true);
header("Location: juego.php");
?>