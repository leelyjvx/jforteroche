<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/intro.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
	<link rel="icon" href="pictures/favicon.ico"/>
</head>
<body>


	<header>
		<nav class="navbar navbar-expand-sm navbar-light">
			<a class="navbar-brand" href="#"><img src="pictures/mini.png" height="30" width="30" alt="logo" class="d-inline-block align-top"> BSPA</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php?user=intro"> Menu </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="user.php?user=chapters"> Chapitres </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="user.php?user=author"> L'auteur </a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" href="user.php?user=contact"> Contact </a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<nav>
		<div class="container-fluid">
			<?= $content; ?>
		</div>
	</nav>

	<footer class="nav navbar navbar-expand-md modal-footer navbar-light">
		<div class="m-0">
			<a href="user.php?user=connect">°</a>
		</div>
		<div class="m-auto">
			<a class="navbar-brand ml-1"><img src="pictures/mini.png" height="30" width="30" alt="logo" class="d-inline-block align-start"></a>
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