<?php
	
	$dsn = 'mysql:host=localhost;dbname=hsm';
	$username = 'root';
	$password = '';

	try
	{
		$db = new PDO($dsn,$username,$password);
	}
	catch(PDOException $e)
	{
		print("Error");
		$error_message = $e->getMessage();
		print "$error_message";
		exit(1);
	}
?>