<?php
session_start();
$_SESSION['user'] = "invitado";
header("Location: ../index.php");
