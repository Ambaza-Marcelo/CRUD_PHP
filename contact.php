<?php 

	include('connection.php');

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['email']);
	$telephone = htmlspecialchars($_POST['telephone']);
	$description = htmlspecialchars($_POST['description']);


	if (isset($_POST['submit'])) {
		if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($telephone) && !empty($description)) {
			$q = $conn->prepare("insert into messages(nom,prenom,email,telephone,description) values(:nom,:prenom,:email,:telephone,:description)");

			$q->bindParam(':nom' , $nom);
			$q->bindParam(':prenom' , $prenom);
			$q->bindParam(':email' , $email);
			$q->bindParam(':telephone' , $telephone);
			$q->bindParam(':description' , $description);

			if ($q->execute()) {
				$message = "vous avez enregistree avec succes";
			}else{
				$message = "Erreur d enregistrement";
			}
		}else{
			$message = "Tous les champs sont obligatoires";
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>contact action</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<h1 class="jumbotron"><?php
			if (isset($message)) {
				 echo $message; }?></h1>
</body>
</html>