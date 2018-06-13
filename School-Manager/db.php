<?php 
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "schoolmanager";

	$conn = mysqli_connect($host, $username, $password, $db)
	or die("Cloud not connect to database");

?>