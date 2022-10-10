<?php

	//connection a la base de donnees 
	$servername = "localhost";
	$dbname = "blog";
	$username = "root";
	$pwd = "";

	try {

		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$pwd);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//stockage de message dans variable
		$message =  "connection reussi";
		
	} catch (PdoException $e) {

		$message = "erreur de connexion";

		echo $e->getMessage();
	}

?>