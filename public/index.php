<?php 

include('../controller/controller.php');

if (isset($_GET['action'])) {

	if ($_GET['action'] === 'intro') { // Aller page intro
		intro();
	}

	if ($_GET['action'] === 'connect') { // Aller page de connexion
		connect();
	}

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

	if ($_GET['action'] === 'readpost') {
		readpost();
	}

	if ($_GET['action'] === 'updatepost') { // MAJ d'un post
	updatepost();

}

if ($_GET['action'] === 'update') {
	update();
}


} else {
	
	intro();
}