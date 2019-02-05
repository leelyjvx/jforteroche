<?php 

include('../controller/controller.php');


if (isset($_GET['action'])) {

	// PUBLIC

	if ($_GET['action'] === 'homepage') { // Page d'accueil
	homepage();
}

	if ($_GET['action'] === 'author') { // Page auteur
		author();
	}

	if ($_GET['action'] === 'chapters') { // Page chapitres public
		chapters();
	}

	if ($_GET['action'] === 'post') { // Article unique public
		post();
	}

	if ($_GET['action'] === 'contact') { // Formulaire contact
		contact();
	}

// Commentaires

	if ($_GET['action'] === 'addcomment') { // Ajouter un commentaire
		addcomment();
	}

	if ($_GET['action'] === 'readComment') { // Lire un commentaire
		readComment();
	}

	if ($_GET['action'] === 'report') { // Signaler un commentaire
		$_GET['id'] === (int) $_GET['id'];
		report();
	}

	if ($_GET['action'] === 'reported') {
		reported();
	}

	if ($_GET['action'] === 'deletecomment') {
		deletecomment();
	}

	if ($_GET['action'] === 'comments') {
		comments();
	}

	// INTRO

	if ($_GET['action'] === 'intro') { // Aller page intro
		intro();
	}

	if ($_GET['action'] === 'connect') { // Aller page de connexion
		connect();
	}

	if ($_GET['action'] === 'valide') { // Validation de la connexion
		valide();
	}

	// ADMIN

	if ($_GET['action'] === 'admin') { // Aller interface admin
		admin();
	}

	if ($_GET['action'] === 'createpost') {
		createpost();
	} 

	if ($_GET['action'] === 'addpost') { // Ajouter un post
		addpost();
	}

	if ($_GET['action'] === 'readposts') { // Afficher les posts
		readposts();
	}

	if ($_GET['action'] === 'deletepost') { // Suprimer un post
		deletepost();
	}

	if ($_GET['action'] === 'readpost') { // Lire un article unique
		readpost();
	}

	if ($_GET['action'] === 'updatepost') { // formulaire de MAJ d'un post
	updatepost();
}

	if ($_GET['action'] === 'update') { // Maj d'un post
	update();
}


} else {
	
	intro();
}