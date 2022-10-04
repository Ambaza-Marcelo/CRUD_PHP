<?php 
	//importation page connection a la base de donnees
	include('connection.php'); 
	if(isset($_POST['submit'])){
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$password_confirmation = htmlspecialchars($_POST['password_confirmation']);

		if (!empty($username) && !empty($password) && !empty($password_confirmation)) {
			if ($password == $password_confirmation) {
				$q = $conn->prepare("insert into users(username,password,password_confirmation) values(:username,:password,:password_confirmation)");

				$q->bindParam(':username' , $username);
				$q->bindParam(':password' , $password);
				$q->bindParam(':password_confirmation' , $password_confirmation);

				if ($q->execute()) {
				$message = "vous avez enregistree avec succes";
				}else{
					$message = "Erreur d enregistrement";
				}
			}else{
				$message = "Veuillez fournir les mots de passe correctes";
			}
		}else{
			$message = "Tous les champs sont obligatoires";
		}
	}
;?>
<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<br>
	<div class="container" id="register">
		<?php
			if (isset($message)) {
				echo "<h1 class = 'alert alert-info'>".$message."</h1>";
			}
		?>
		<form action="register.php" method="POST">
		<div class="row">
			<div class="col-md-6">
				<label for="username">Nom Utilisateur</label>
				<div class="form-group" id="username">
					<input class="form-control" type="text" name="username">
				</div>
				<label for="pwd">Mot de passe</label>
				<div class="form-group" id="pwd">
					<input class="form-control" type="password" name="password">
				</div>
			</div>
			<div class="col-md-6">
				<label for="pwd2">Mot de passe confirmation</label>
				<div class="form-group" id="pwd2">
					<input class="form-control" type="password" name="password_confirmation">
				</div>
			</div>
			<div>
				<button type="submit" name="submit" class="btn btn-success">Enregister</button>
			</div>
		</div>
	</form>
	</div>
</body>
</html>