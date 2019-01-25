<?php 

include('../controller/controller.php');

if (isset($_GET['action'])) {

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

if ($_GET['action'] === 'addcomment') {
	addcomment();
}

	if ($_GET['action'] === 'intro') { // Aller page intro
		intro();
	}

	if ($_GET['action'] === 'connect') { // Aller page de connexion
		connect();
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