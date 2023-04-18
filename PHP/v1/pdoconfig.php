<?php //login.php
	$db_host = 'localhost';
	$db_name = 'team2'; //change to name of your local database
	$db_user = 'root';
	$db_pass = '';
	$chrs = 'utf8mb4';
	$attr = "mysql:host=$db_host;dbname=$db_name;charset=$chrs";
	$opts =
	[
		PDO::ATTR_ERRMODE				=> PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES		=> false,
	];
?>