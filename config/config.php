<?php
	session_start();

	// Database Configuration
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');	
	define('DB_DATABASE', 'blogapp');
	$db = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	// Check database for error
	if (!$db) {
		die('Database connect filed: '.mysql_connect_error());
	}
?>