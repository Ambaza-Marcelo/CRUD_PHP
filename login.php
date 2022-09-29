<?php 

	include('connection.php');
	//affichage des donneees dans le tableau 

	if (isset($_POST['submit'])) {

		$username = htmlspecialchars($_POST['username']);
		$password = md5(htmlspecialchars($_POST['password']));

		$data = $conn->query("select * from users")->fetchAll();

		if (!empty($username) && !empty($password)) {
			$count = 0;
			foreach ($data as $row) {
			if ($row['username'] == $username && $row['password'] == $password) {
				header('Location: admin.php')
			}else{
				$count = $count + 1;
			}
		}
		if ($count > 0) {
			$message = "mot de passe ou nom utilisateur incorect";
		}
		}else{
			echo "veuillez saisir tous les entrees";
		}
		
	}


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
		<?php if (isset($message)) {
			echo $message;
		} ;?>
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
			<button class="btn btn-success" name="submit">&nbsp;&nbsp;Connexion</button>
		</div>
		<div>
			Si vous n'avez pas le compte cliquer <a href="register.php">Ici</a>
		</div>
	</form>
	</div>
</body>
</html>