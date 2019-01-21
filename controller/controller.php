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
	require("../view/templates/admin/admin_template.php");
	echo $post->getTitle() . "</br>" ;
	echo $post->getContent() . "</br>" ;
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

//remplacer avec un require !! :)
	echo $post->getTitle() . "<br/>" ;
	echo $post->getContent() . "<br/>" ;
	echo ' <form action = "#" method = "post">' ;
	echo ' <p> <input type = "submit" name = "delete" value = "Supprimer cet article."/> </p>' ;
	echo ' <p> <input type = "submit" name = "update" value = "Modifier cet article. " </p> ' ;
	echo ' <p> <a href = "../view/posts_edit.php"> Retour </a> </p> ' ;
	echo ' </form>' ;
}

function deletepost() {
	$manager = new PostManager();
	$manager->delete($_GET['id']);
}

function updatepost() {
	$manager = new PostManager();
	$post = $manager->readID($_GET['id']);

	// mettre un require à la place!! ;))

	echo '<form action = "#" method = "post">';
	echo '<p> <input type="text" name="id" value="' .$post->getID(). '"> </p>';
	echo '<p> <input type="text" name="title" value="' .$post->getTitle(). '"> </p>';
	echo '<p> <textarea name="content">' .$post->getContent(). '</textarea> </p>';
	echo '<p> <input type="submit" name="modif">' ;


	if (isset($_POST['id']) && $_POST['id'] !== '' AND isset($_POST['title']) && $_POST['title'] !== '' AND isset($_POST['modif'])) {
		
		$post = new Post($_POST['title'], $_POST['content']);
		$post->setID($_POST['id']);
		var_dump($post);
		$manager = new PostManager();
		$manager->update($post);
	}
}
