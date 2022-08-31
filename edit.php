<?php
include('connection.php');
//update script using pdo connection
	
			$id = $_GET['id'];
			$nom = htmlspecialchars($_POST['nom']);
			$prenom = htmlspecialchars($_POST['prenom']);
			$email = htmlspecialchars($_POST['email']);
			$telephone = htmlspecialchars($_POST['telephone']);
			$description = htmlspecialchars($_POST['description']);
	if (isset($_POST['update'])) {
		if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($telephone) && !empty($description)) {
		

  			$sql = "UPDATE `messages` SET `nom`='$nom',`prenom`='$prenom',`email`='$email',`description`='$description',`telephone`='$telephone' WHERE `id` = '$id'";
  			
  			if ($conn->exec($sql)) {
  				//auto redirect
  				header("Location: messages.php");
  			}
  			
		}else{
			$message = "Tous les champs sont obligatoires";
		}
	}

?>