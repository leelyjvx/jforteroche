<?php

require('../model/Post.php');
require('../model/PostManager.php');

function intro() {
	require("../view/intro.php");
}

function connect() {
	require("../view/admin/connect.php");
}

function admin() {
	require("../view/admin/admin.php");
}

function addpost() {
	$post = new Post($_POST['title'], $_POST['content']);
	$manager = new PostManager();
	$manager->addpost($post);
	require("../view/admin/validepost.php");
}

function createpost() {
	require("../view/admin/createpost.php");
}

function readposts() {
	$manager = new PostManager();
	$posts = $manager->read();
	require("../view/admin/listposts.php");	
}

function readpost() {
	$manager = new PostManager();
	$post = $manager->readID($_GET['id']);
	require("../view/admin/uniquepost.php");
}

function deletepost() {
	$manager = new PostManager();
	$manager->delete($_GET['id']);
	$title = "Article supprimé";
	$content = "<p> L'article a bien été supprimé! </p> </br> <a href='../public/index.php?action=readposts' class='btn btn-dark'> Retour à la liste </a>";
	require("../view/templates/admin/admin_template.php");
}

function update() {
	$manager = new PostManager();
	$post = $manager->readID($_GET['id']);
	require("../view/admin/updatepost.php");
}

function updatepost() {
	if ($_POST['title'] != '' || $_POST['content'] !== '') {
		$post = new Post($_POST['title'], $_POST['content']);
		$post->setID($_POST['id']);
		$manager = new PostManager();
		$manager->update($post);
		require("../view/admin/updatedpost.php");	
	} 
	else {
		require("../view/admin/admin.php");
	}
	
}
