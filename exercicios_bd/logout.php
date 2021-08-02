<?php
SESSION_START();
unset($_SESSION['login']);
unset($_SESSION['password']);
header('location:index.php');



?>

