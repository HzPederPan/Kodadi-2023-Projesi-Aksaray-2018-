<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbName = "kod_adi_2023";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	}
catch(PDOExeption $e)
	{
	echo "Connection Failed: " . $e->getMessage();	
	}
?>