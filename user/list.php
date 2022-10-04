<?php 

	include('../connection.php');
	//affichage des donneees dans le tableau 

			$data = $conn->query("select * from users")->fetchAll();


?>
<!DOCTYPE html>
<html>
<head>
	<title>contact action</title>
	<meta charset="utf-8">
	<!-- bootsrap import -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<div class="container">
	<div>
		<div id="nav" class="jumbotron">
			<ul class="list">
				<li><a href="">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="messages.php">Messages</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="">Utilisateurs</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li id="btn"><a href="login.php" class="btn btn-primary" onclick="return(confirm('voulez-vous se deconnecter?'))">Se déconnecter</a></li>
			</ul>
		</div>
	</div>
	<!-- view data from database -->
	<table class="table table-striped">
		<h1 >liste des utilisateurs</h1>
		<tr>
			<th width="3%">ID</th>
			<th width="10%">Username</th>
			<th width="10%">Password</th>
			<th width="10%">Role</th>
			<th width="30%">Action</th>
		</tr>
		<?php 
		foreach($data as $row){ ?>
			<tr class='bg-info'>
			<td width="3%"><?php echo $row['id'] ;?></td>
			<td width="10%"><?php echo $row['username'] ;?></td>
			<td width="10%"><?php echo $row['password'] ;?></td>
			<td width="10%"><?php echo $row['role'] ;?></td>
			<!-- action btn -->
			<td width="30%"><a href='edit.php?id=<?php echo $row['id'];?>' onclick="return(confirm('voulez vous vraiment modifier <?php echo $row['username'];?>'))" class='btn btn-primary'>modifier</a>&nbsp;<a href='delete.php?id=<?php echo $row['id'];?>' class='btn btn-danger' onclick="return(confirm('voulez vous vraiment supprimer <?php echo $row['username'];?>'))">supprimer</a></td>
			</tr>
 	<?php } ;?>
		
	</table>
</div>
</body>
</html>