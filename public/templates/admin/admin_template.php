<!DOCTYPE html>
<html>
<head>
	<title> <?= $title; ?> </title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin/admin_template.css">
</head>
<body>

	<div class="container">

		<div class="box1">	
			<header>
				<div class="navbar navbar-expand-md justify-content-around">
					<div class="d-flex m-1 py-2">
						<a class="nav-link" href="../public/index.php?action=admin"> Accueil </a>
						<a class="nav-link" href="../public/index.php?action=create"> Créer un article </a>
						<a class="nav-link" href="../public/index.php?action=readposts"> Lire les articles </a>
						<a class="nav-link" href="../public/index.php?action=disconnect"> Déconnexion </a>
					</div>
				</div>
			</header>
		</div>


		<div class="box2">
			<nav>
				<?= $content; ?>
			</nav>
		</div>

		<div class="box3">
			<footer>
				
			</footer>
		</div>

	</div>

</body>
</html>