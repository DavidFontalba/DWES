<?
session_start();
unset($_SESSION['user']);
unset($_SESSION['multas']);
session_destroy();
session_start();
session_regenerate_id(true);
header("Location: ../index.php");
