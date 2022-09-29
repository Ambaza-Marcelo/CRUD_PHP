<?php 

	include('connection.php');
	//affichage des donneees dans le tableau 

			$data = $conn->query("select * from messages")->fetchAll();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="margin-top: 12%;margin-left: 30%;">
	<div class="container">
		<form action="login.php" method="POST">
		<div class="row">
			<div class="col-md-6">
				<label>Nom Utilisateur</label>
				<div class="form-group">
					<input class="form-control" type="text" name="username" placeholder="Saisir nom Utilisateur">
				</div>
				<label>Mot de passe</label>
				<div class="form-group">
					<input class="form-control" type="password" name="password" placeholder="Saisir mot de passe">
				</div>
			</div>
		</div>
		<div>
			<button class="btn btn-success">&nbsp;&nbsp;Connexion</button>
		</div>
		<div>
			Si vous n'avez pas le compte cliquer <a href="register.php">Ici</a>
		</div>
	</form>
	</div>
</body>
</html>