<!DOCTYPE html>
<html lang="fr">

<head>
	<title><?= $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, schrink-to-fit=no">
	<meta name="description" content="Bienvenue sur le roman en ligne Billet Simple pour l'Alaska">
	<meta name="author" content="Jean Forteroche">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/intro.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
	<link rel="icon" href="assets/fav/favicon.ico"/>
</head>

<body>

	<div class="container">

		<!-- Header -->
		<nav class="navbar navbar-expand-lg navbar-light bg-warning sticky-top">
			<a class="navbar-brand" href="#"><img src="../../assets/pictures/mini.png" width="30" class="d-inline-block align-top" alt="logo"> BSPA </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php?page=intro">ACCUEIL <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=chapters"> CHAPITRES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=author">AUTEUR</a>
					</li>
				</ul>
				<span class="navbar-text">By Jean Forteroche</span>
			</div>
		</nav>

		<!-- Nav -->
		<nav>

			<?= $content; ?>

		</nav>
		<!-- Footer -->

		<footer class="nav navbar navbar-expand-md navbar-light">
			<div class="m-0">
				<a href="index.php?page=connect">°</a>
			</div>
			<div class="m-auto">
				<a class="navbar-brand ml-1"><img src="assets/pictures/mini.png" height="30" width="30" alt="logo" class="d-inline-block align-start"></a>
			</div>
			<div class="btn-group-sm">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-google"></i></a>
			</div>
		</footer>

	</body>
	</html>
