<?php
session_start();
unset($_SESSION["auth"]);
unset($_SESSION["usuario"]);
session_destroy();
header("Location: ejauth.php");
session_start();
session_regenerate_id(true);
