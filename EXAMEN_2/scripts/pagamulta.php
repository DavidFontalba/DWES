<?php
session_start();

$_SESSION['multas'][array_search($_GET['idMulta'], $_SESSION['multas'])]['estado'] = "Pagada";
header("Location: ../index.php");
