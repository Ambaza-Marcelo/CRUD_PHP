<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="margin-top: 10%;">
	<br>
	<div class="container" id="register">
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
	</div>
</body>
</html>