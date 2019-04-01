<?php 

require('../controller/controller.php');


if (isset($_GET['connect'])) {

	if ($_GET['connect'] === 'valide') {
		valide();
	}
}


if (isset($_GET['page'])) {

	auth();
	
	if ($_GET['page'] === 'admin') {
		admin();
	}
}


elseif (isset($_GET['comment'])) {


	auth();

	if ($_GET['comment'] === 'readComment') { // Lire un commentaire
		readComment();
	}

	if ($_GET['comment'] === 'reported') {
		reported();
	}

	if ($_GET['comment'] === 'deletecomment') {
		deletecomment();
	}

	if ($_GET['comment'] === 'validecomment') {
		validecomment();
	}

	if ($_GET['comment'] === 'comments') {
		comments();
	}

}

elseif ($_GET['post']) {


	auth();

	if ($_GET['post'] === 'createpost') {
		createpost();
	} 

	if ($_GET['post'] === 'addpost') {
		addpost();
	}

	if ($_GET['post'] === 'readposts') {
		readposts();
	}

	if ($_GET['post'] === 'deletepost') {
		deletepost();
	}

	if ($_GET['post'] === 'readpost') {
		readpost();
	}

	if ($_GET['post'] === 'updatepost') {
		updatepost();
	}

	if ($_GET['post'] === 'update') {
		update();
	}

}

elseif ($_GET['admin']) {


	auth();

	if ($_GET['admin'] === 'disconnect') {
		disconnect();
	}
}

else {
	connect();
}