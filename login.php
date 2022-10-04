<?php 

	include('connection.php');
	//affichage des donneees dans le tableau 

	if(ISSET($_POST['submit'])){
        if($_POST['username'] != "" || $_POST['password'] != ""){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM `users` WHERE `username`=? AND `password`=? ";
            $query = $conn->prepare($sql);
            $query->execute(array($username,$password));
            $row = $query->rowCount();
            $fetch = $query->fetch();
            if($row > 0 ) {
            	if ($fetch['role'] == 'admin') {
            		header("location: admin.php");
            	}else{
            		header("location: user/list.php");
            	}
                
            } else{
                $message = "nom Utilisateur ou mot de passe incorrect";
            }
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