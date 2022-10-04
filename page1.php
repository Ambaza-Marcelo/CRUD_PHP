

<!DOCTYPE html>
<html>
<head>
	<title>page de test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<script type="text/javascript" src="js/js.js"></script>
</head>
<body>
	<!--home page -->
<div class="container">
<div>
	<div>
		<div id="nav" class="jumbotron">
			<ul class="list">
				<li><a href="page1.php">Accueil</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="actualites.php">Actualites</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="#contact">contact</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="register.php">S'inscrire</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li id="btn"><a href="login.php" class="btn btn-primary" onclick="return(confirm('Avez vous le compte?'))">Se connecter</a></li>
			</ul>
		</div>
	</div>
	<div>
		<div class="img">
			<div class="img1">
				<img src="img/4000.svg" width="300">
			</div>
			<div class="img2">
				<img src="img/5000.svg" width="300">
			</div>
		</div>
	</div>
	<br>
	<br>
	<div>
		<form action="contact.php" method="post">
		<div class="row" id="contact">
			<div class="col-md-6"> 
				<div class="form-group">
					<label for="nom">Nom *</label>
					<input type="text" id="nom" name="nom" placeholder="Entrer votre nom" class="form-control">
				</div>
				<div class="form-group">
					<label for="prenom">Prenom *</label>
					<input type="text" id="prenom" name="prenom" placeholder="Entrer votre prenom" class="form-control">
				</div>
			</div>
			<div class="col-md-6"> 
				<div class="form-group">
					<label for="email">Email *</label>
					<input type="text" id="email" name="email" placeholder="Entrer votre nom" class="form-control">
				</div>
				<div class="form-group">
					<label for="telephone">Telephone *</label>
					<input type="text" id="telephone" name="telephone" placeholder="Entrer votre nom" class="form-control">
				</div>
			</div>
			<div class="col-lg-12">
				<label for="description">Description</label>
				<textarea class="form-control" name="description" placeholder="Enter la description"></textarea>
			</div>
			<div>
				<button type="submit" name="submit" class="btn-lg btn-primary">Envoyer</button>
			</div>
		</div>
	</form>
	</div>
</div>
</div>
</body>
</html>