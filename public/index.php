<?php 

include('../controller/controller.php');


if (isset($_GET['admin'])) {

	auth();
	
	if ($_GET['admin'] === 'readComment') { // Lire un commentaire
		readComment();
	}

	if ($_GET['admin'] === 'reported') {
		reported();
	}

	if ($_GET['admin'] === 'deletecomment') {
		deletecomment();
	}

	if ($_GET['admin'] === 'validecomment') {
		validecomment();
	}

	if ($_GET['admin'] === 'comments') {
		comments();
	}


	if ($_GET['admin'] === 'disconnect') {
		disconnect();
	}

	if ($_GET['admin'] === 'admin') { // Aller interface admin
		admin();
	}

	if ($_GET['admin'] === 'createpost') {
		createpost();
	} 

	if ($_GET['admin'] === 'addpost') { // Ajouter un post
		addpost();
	}

	if ($_GET['admin'] === 'readposts') { // Afficher les posts
		readposts();
	}

	if ($_GET['admin'] === 'deletepost') { // Suprimer un post
		deletepost();
	}

	if ($_GET['admin'] === 'readpost') { // Lire un article unique
		readpost();
	}

	if ($_GET['admin'] === 'updatepost') { // formulaire de MAJ d'un post
	updatepost();
}

	if ($_GET['admin'] === 'update') { // Maj d'un post
	update();
}


} else {
	intro();
}