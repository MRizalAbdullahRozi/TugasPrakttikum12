<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn=mysqli_connect($servername, $username, $password, $dbname) or die (mysqli_error());
if (!$conn) {
	die("Connection failed ".mysqli_connect_error());
	}
?>