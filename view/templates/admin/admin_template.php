<!DOCTYPE html>
<html>
<head>
	<title> <?= $title; ?> </title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin/admin_template.css">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
	<script src="../wys/tinymce.min.js"></script>
	<script type="text/javascript">

		tinymce.init({
			selector: 'textarea',
			language: "fr_FR",
			plugins: "image, link, anchor, lists, table, textcolor colorpicker, charmap, contextmenu, help, hr, nonbreaking, preview, print, searchreplace, wordcount, visualblocks",
			toolbar: "undo redo | bold italic underline | forecolor backcolor | image | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table anchor link image",
			contextmenu: "undo redo | bold italic underline | link image inserttable | cell row column deletetable",
			language: "fr_FR",
			skin: "oxide",
			forced_root_block: false,
			force_br_newlines: true,
			force_p_newlines: false
		});

	</script>
</head>
<body>

	<div class="background">
		<div class="off_box">
			<div class="container">

				<div class="box1">	
					<header>
						<div class="navbar navbar-expand-md justify-content-center align-content-center">
							<div class="d-flex m-1 py-2">
								<a class="nav-link" href="../public/index.php?admin=admin"> Accueil </a>
								<a class="nav-link" href="../public/index.php?admin=createpost"> Créer un article </a>
								<a class="nav-link" href="../public/index.php?admin=readposts"> Lire les articles </a>
								<a class="nav-link" href="../public/index.php?admin=disconnect"> Déconnexion </a>
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