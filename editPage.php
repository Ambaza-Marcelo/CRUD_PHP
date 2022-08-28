<?php
 include('connection.php');
 
 $id = $_GET['id'];

 $sql = 'select * from messages where id = :id';

 $statement = $conn->prepare($sql);
 $data = $statement->bindParam(':id',$id);
 $statement->execute();
 $result = $statement->fetch(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html>
<head>
	<title>page de modification des messages</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
	<div>
		<div id="nav" class="jumbotron">
			<ul class="list">
				<li><a href="page1.php">Accueil</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="actualites.php">Actualites</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="page1.php?contact">contact</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="messages.php">Messages</a></li>
				<li id="btn"><button class="btn btn-primary" onclick="prompt('Entrer votre mot de passe pour continuer')">Connexion</button></li>
			</ul>
		</div>
	</div>
	<div>
		<form action="edit.php?id=<?php echo $result->id ;?>" method="post">
		<div class="row" id="contact">
			<div class="col-md-6"> 
				<div class="form-group">
					<label for="nom">Nom *</label>
					<input type="text" id="nom" name="nom" value="<?php echo $result->nom ;?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="prenom">Prenom *</label>
					<input type="text" id="prenom" name="prenom" value="<?php echo $result->prenom ;?>" class="form-control">
				</div>
			</div>
			<div class="col-md-6"> 
				<div class="form-group">
					<label for="email">Email *</label>
					<input type="text" id="email" name="email" value="<?php echo $result->email ;?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="telephone">Telephone *</label>
					<input type="text" id="telephone" name="telephone" value="<?php echo $result->telephone ;?>" class="form-control">
				</div>
			</div>
			<div class="col-lg-12">
				<label for="description">Description</label>
				<textarea class="form-control" name="description"><?php echo $result->description ;?></textarea>
			</div>
			<div>
				<button type="submit" name="update" class="btn-lg btn-primary">Modifier</button>
			</div>
		</div>
	</form>
	</div>
</div>
</body>
</html>