<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: UserLogin.php");
}
elseif (!isset($_SESSION['admin'])) 
{
	header("Location: AdminLogin.php");
}

?>