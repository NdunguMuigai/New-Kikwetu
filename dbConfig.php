<?php 
$serverName="localhost";
$user="root";
$dbName="Kikwetu";
$password="";

$con=mysqli_connect($serverName,$user,$password,$dbName);

if (!$con) 
{
	die("Connection failed: ".mysqli_connect_error());
}

?>