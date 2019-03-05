<?php 

require('../controller/pcontroller.php');

if (isset($_GET['user'])) {
	

	if ($_GET['user'] === 'homepage') { // Homepage
		homepage();
	}

	if ($_GET['user'] === 'author') { // Author's page
	author();
	}

	if ($_GET['user'] === 'chapters') { // All chapters page
		chapters();
	}

	if ($_GET['user'] === 'post') { // Public post page
		post();
	}

	if ($_GET['user'] === 'contact') { // Contact form
		contact();
	}

	if ($_GET['user'] === 'addcomment') { // Add post
		addcomment();
	}

	if ($_GET['user'] === 'report') { // Signaler un commentaire
		$_GET['id'] === (int) $_GET['id'];
		report();
	}

	if ($_GET['user'] === 'intro') { // Aller page intro
		intro();
	}

	if ($_GET['user'] === 'connect') { // Aller page de connexion
		connect();
	}

	if ($_GET['user'] === 'valide') {
		valide();
	}

}
