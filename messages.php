<?php 

	include('connection.php');
	//affichage des donneees dans le tableau 

			$data = $conn->query("select * from messages")->fetchAll();


?>
<!DOCTYPE html>
<html>
<head>
	<title>contact action</title>
	<meta charset="utf-8">
	<!-- bootsrap import -->
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
	<!-- view data from database -->
	<table class="table table-striped">
		<h1 >liste des messages</h1>
		<tr>
			<th width="3%">ID</th>
			<th width="10%">Nom</th>
			<th width="10%">Prenom</th>
			<th width="10%">Email</th>
			<th width="10%">Telephone</th>
			<th width="60%">Description</th>
			<th width="30%">Action</th>
		</tr>
		<?php 
		foreach($data as $row){ ?>
			<tr class='bg-info'>
			<td width="3%"><?php echo $row['id'] ;?></td>
			<td width="10%"><?php echo $row['nom'] ;?></td>
			<td width="10%"><?php echo $row['prenom'] ;?></td>
			<td width="10%"><?php echo $row['email'] ;?></td>
			<td width="10%"><?php echo $row['telephone'] ;?></td>
			<td width="60%"><?php echo $row['description'] ;?></td>
			<!-- action btn -->
			<td width="30%"><a href='editPage.php?id=<?php echo $row['id'];?>' onclick="return(confirm('voulez vous vraiment modifier <?php echo $row['prenom'];?>'))" class='btn btn-primary'>modifier</a>&nbsp;<a href='delete.php?id=<?php echo $row['id'];?>' class='btn btn-danger' onclick="return(confirm('voulez vous vraiment supprimer <?php echo $row['prenom'];?>'))">supprimer</a></td>
			</tr>
 	<?php } ;?>
		
	</table>
</div>
</body>
</html>