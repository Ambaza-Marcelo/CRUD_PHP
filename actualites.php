<?php 

	include('connection.php');

			$data = $conn->query("select * from messages")->fetchAll();


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
<div class="container">
	<div>
		<div id="nav" class="jumbotron">
			<ul class="list">
				<li><a href="page1.php">Accueil</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="">Actualites</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="page1.php?contact">contact</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="messages.php">Messages</a></li>
				<li id="btn"><button class="btn btn-primary" onclick="prompt('Entrer votre mot de passe pour continuer')">Connexion</button></li>
			</ul>
		</div>
	</div>
	<button id="go" class="btn btn-info">&raquo; Cliquer</button>
	<div id="div" class="alert alert-primary">Bonjour,on vous appelle<span id="span"></span></div>

</div>
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script>
// Using multiple unit types within one animation.
 var nom = prompt("Entrer votre nom");
$( "#go" ).click(function() {
  $( "#div" ).animate({
    width: "70%",
    opacity: 0.4,
    marginLeft: "0.6in",
    fontSize: "3em",
    borderWidth: "10px",
  }, 1500 );


  $( "#span" ).append(" "+nom);
});
</script>
</body>
</html>