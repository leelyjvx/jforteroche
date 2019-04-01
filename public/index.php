<?php 

include('../controller/pcontroller.php');

if (isset($_GET['page'])) {

	if ($_GET['page'] === 'add_min') {
		add_min();
	}

	if ($_GET['page'] === 'create_admin') {
		create_admin();
	}

	if ($_GET['page'] === 'homepage') {
		homepage();
	}

	if ($_GET['page'] === 'author') {
		author();
	}

	if ($_GET['page'] === 'chapters') {
		chapters();
	}

	if ($_GET['page'] === 'post') {
		post();
	}

	if ($_GET['page'] === 'contact') {
		contact();
	}


	if ($_GET['page'] === 'intro') {
		intro();
	}

	if ($_GET['page'] === 'connect') {
		connect();
	}
}

elseif (isset($_GET['comment'])) {

	if ($_GET['comment'] === 'addcomment') {
		addcomment();
	}

	if ($_GET['comment'] === 'report') {
		$_GET['id'] === (int) $_GET['id'];
		report();
	}
} else {
	intro();
}