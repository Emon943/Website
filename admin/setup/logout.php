<?php
session_start();
$user_name	=	$_SESSION['user'];
if (isset($_COOKIE[$user_name])) 
{
	setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
header("location:../index.php");
?> 
