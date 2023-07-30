<?php
session_start();
session_destroy();
unset($_SESSION["Eno"]);
unset($_SESSION["Password"]);
header("Location:Student.php");
?>