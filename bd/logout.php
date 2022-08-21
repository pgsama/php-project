<?php 
session_start();
$_SESSION['s_username'] = null;
session_destroy();
header("Location: ../index.php");
?>