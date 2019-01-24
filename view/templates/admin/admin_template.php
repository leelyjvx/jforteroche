<!DOCTYPE html>
<html>
<head>
	<title> <?= $title; ?> </title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin/admin_template.css">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
</head>
<body>

	<div class="background">
	<div class="off_box">
		<div class="container">

			<div class="box1">	
				<header>
					<div class="navbar navbar-expand-md justify-content-center align-content-center">
						<div class="d-flex m-1 py-2">
							<a class="nav-link" href="../public/index.php?action=admin"> Accueil </a>
							<a class="nav-link" href="../public/index.php?action=createpost"> Créer un article </a>
							<a class="nav-link" href="../public/index.php?action=readposts"> Lire les articles </a>
							<a class="nav-link" href="../public/index.php?action=disconnect"> Déconnexion </a>
						</div>
					</div>
				</header>
			</div>


			<div class="box2">
				<nav>
					<div class="arrow"><a href="#"><img src="../public/pictures/arrow2.png" width="30"></a></div>
					<?= $content; ?>

				</nav>
			</div>

			<div class="box3">
				<footer>

				</footer>
			</div>
		</div>
	</div>
</div>

</body>
</html>