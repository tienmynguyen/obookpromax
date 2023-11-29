<?php 

session_start();
ob_start();

$_SESSION['is_login'] == false;
$_SESSION['isLogin_Admin'] == false;
unset($_SESSION['email']);
session_destroy();
header('location: index.php')

?>