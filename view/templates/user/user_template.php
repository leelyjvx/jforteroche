<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container">


		<div class="box1">
			<header>
				<div class="navbar navbar-expand-md py-1 justify-content-center">
					<div class="d-flex p-2 m-1">
						<div class="navbar-brand"> <a href="../public/index.php?action=intro"><img src="../public/pictures/mini.png" height="30"></a></div>
						<a class="nav-link" href="../public/index.php?action=homepage"> Accueil </a>
						<a class="nav-link" href="../public/index.php?action=chapters"> Chapitres </a>
						<a class="nav-link" href="../public/index.php?action=author"> Auteur </a>
						<a class="nav-link" href="../public/index.php?action=contact"> Contact </a>
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
				<div class="navbar justify-content-center">
					<div class="navbar-brand"> <a href="../public/index.php?action=connect"> <h2> Jean Forteroche </h2></a></div>
				</div>
			</footer>
		</div>
	</div>

</body>
</html>