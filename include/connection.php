<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "project";

	$conn = mysqli_connect($host, $user, $password, $database);

	if(!$conn){
		echo "Database Not Connected";
	}
	


?>