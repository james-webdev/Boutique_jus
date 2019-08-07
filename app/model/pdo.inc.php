<?php

try {
	$dns = "mysql:host=" . DB_HOST . ";dbname=" .DB_NAME; 
	

	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);



	$pdo = new PDO ($dns, DB_USER, DB_PASSWORD, $options);
	
}

 catch (Exception $e) {
 	
 	die("Connexion impossible : " . utf8_encode($e->getMessage()));
 	
}


