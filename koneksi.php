<?php
	$conn = new mysqli('127.0.0.1', 'root', '', 'ptbdk');
	if ($conn->connect_error) {
		die("Database connection failed, Error:<br>".$conn->connect_error);
	}
?>