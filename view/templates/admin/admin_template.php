<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title; ?></title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/admin/admin_template.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
	<link rel="icon" href="assets/fav/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/css/admin/admin_template.css">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton|Merriweather|Montserrat|Playfair+Display|Roboto+Condensed" rel="stylesheet">
	<script src="assets/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">

		tinymce.init({
			selector: 'textarea',
			language: "fr_FR",
			plugins: "image, link, anchor, lists, table, textcolor colorpicker, charmap, contextmenu, help, hr, nonbreaking, preview, print, searchreplace, wordcount, visualblocks",
			toolbar: "undo redo | bold italic underline | forecolor backcolor | image | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table anchor link image",
			contextmenu: "undo redo | bold italic underline | link image inserttable | cell row column deletetable",
			language: "fr_FR",
			skin: "oxide",
			image_dimensions: false,
			image_class_list: [
			{title: 'Responsive', value: 'img-responsive'}
			],
			forced_root_block: false,
			force_br_newlines: true,
			force_p_newlines: false
		});

	</script>

</head>
<body>

	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-warning" id="sidebar-wrapper">
			<div class="sidebar-heading"><a href="admin.php?page=admin">Billet simple pour l'Alaska</a>  </div>
			<div class="list-group list-group-flush">
				<a href="admin.php?post=createpost" class="list-group-item list-group-item-action bg-warning"><i class="fas fa-pen"></i> Créer un article</a>
				<a href="admin.php?post=readposts" class="list-group-item list-group-item-action bg-warning"><i class="fas fa-glasses"></i> Lire/Editer les articles</a>
				<a href="admin.php?comment=comments" class="list-group-item list-group-item-action bg-warning"><i class="fas fa-comments"></i> Derniers commentaires</a>
				<a href="admin.php?comment=reported" class="list-group-item list-group-item-action bg-warning"><i class="fas fa-exclamation"></i> Commentaires signalés</a>
				<a href="#" class="list-group-item list-group-item-action bg-warning"><i class="fas fa-envelope"></i> Contact</a>
				<a href="admin.php?admin=disconnect" class="list-group-item list-group-item-action bg-warning"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<nav class="navbar navbar-expand-lg navbar-light bg-warning">
				<button class="btn btn-light fix" id="menu-toggle">Administration</button>

			</nav>

			<div class="container-fluid">      

				<?= $content; ?>

			</div>
		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Menu Toggle Script -->
	<script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	</script>

</body>

</html>