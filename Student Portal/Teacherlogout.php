<?php
session_start();
session_destroy();
unset($_SESSION["Id"]);
unset($_SESSION["Password"]);
header("Location:Teacher.php");
?>