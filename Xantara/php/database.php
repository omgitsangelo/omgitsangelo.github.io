<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'xantara';

	$conn = new mysqli($server, $username, $password, $dbname);

	error_reporting(0);

	if ($conn -> connect_error)
	{
		echo 			"Failed to connect to MySQL: " .mysqli_connect_error();
	}
	else
	{
		//echo "Connection Successful";
	}
?>
