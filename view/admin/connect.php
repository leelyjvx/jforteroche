<!DOCTYPE html>
<html lang="fr">
<head>
	<title> Connexion </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/admin/connect.css">
</head>
<body>

	<div class="container">
		<div class="boite">
			<h2> Vous ne passerez pas !</h2>
			<h5>... Sauf si vous franchissez la porte ;)</h5>

			<img src="../public/pictures/User_Avatar_2.png">

			<div class="row">
				<form action="../public/index.php?action=admin" method="post">
					<div class="form-group ">

						<p>
							<label for="username"> Identifiant : </label>
							<input type="text" name="username" id="username" autofocus required>  
						</p>
						<p>
							<label for="password"> Mot de passe : </label>
							<input type="password" name="password" id="password" required>
						</p>
						<div class="connect">
							<div class="btn-group">
								<a href="../public/index.php?action=admin" class="btn btn-outline-light"> Connexion </a>  
								<a href="../public/index.php?action=intro" class="btn btn-warning"> Accueil </a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>