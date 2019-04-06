<?php

require('../model/Post.php');
require('../model/PostManager.php');
require('../model/Comment.php');
require('../model/CommentManager.php');
require('../model/Admin.php');
require('../model/AdminManager.php');


function auth() {
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:index.php?page=connect');
	}
}

function disconnect() {
	session_start();
	session_destroy();
	header('location:index.php?page=intro');
}

function valide() {

	$login = htmlspecialchars($_POST['username']);
	$pass = htmlspecialchars($_POST['password']);
	$adminmanager = new AdminManager();
	$verif = $adminmanager->check($username, $pass);

	if (!$verif) {
		header("location:index.php?page=connect");
		exit();
	}
	else {
		session_start();
		//session_register($_POST['username']);
		$_SESSION['username'] = $_POST['username'];
		header("location:admin.php?page=admin");
	}
}


function admin() { // Affichage menu admin -- go to admin page
	require("../view/admin/admin.php");
}

function create_admin() { // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	require("../view/admin/create_admin.php");
}

function addpost() { // Ajouter un article -- function to create a post -- 
	$post = new Post(htmlspecialchars_decode($_POST['title']), htmlspecialchars_decode($_POST['content']));
	$manager = new PostManager();
	$manager->addpost($post);
	require("../view/admin/validepost.php");
}

function createpost() { // Page de création des articles -- form page for create a post
	require("../view/admin/createpost.php");
}	

function readposts() { // Affichage de tous les articles -- read all posts
	$manager = new PostManager();
	$posts = $manager->read();
	require("../view/admin/listposts.php");	
}

function readpost() { // Affichage d'un article précis -- read one post
$manager = new PostManager();
$post = $manager->readID($_GET['id']);
require("../view/admin/uniquepost.php");
}

function deletepost() { // Suppresion d'un article -- function to delete a post
$manager = new PostManager();
$manager->delete($_GET['id']);
$title = "Article supprimé";
$content = "<p> L'article a bien été supprimé! </p> </br> <a href='admin.php?post=readposts' class='btn btn-dark'> Retour à la liste </a>";
require("../view/templates/admin/admin_template.php");
}

function update() { // Modification d'un article -- function to update a post pt1
$manager = new PostManager();
$post = $manager->readID($_GET['id']);
require("../view/admin/updatepost.php");
}

function updatepost() { // Formulaire de modif -- form to update a post
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

function readcomment() {
	$commentmanager = new CommentManager();
	$comment = $commentmanager->readcomment($_GET['id']);
	echo $comment->getPostID() . '</br>';
	echo $comment->getPseudo() . '</br>';
	echo $comment->getComment();
	var_dump($comment);
}

function reported() {
	$commentmanager = new CommentManager();
	$comments = $commentmanager->reported();
	require("../view/admin/reported.php");
}

function comments() {
	$commentmanager = new CommentManager();
	$comments = $commentmanager->comments();
	require("../view/admin/comments.php");
}

function deletecomment() {
	$commentmanager = new CommentManager();
	$commentmanager->deletecomment($_GET['id']);
	header('location:admin.php?comment=comments');
}

function validecomment() {
	$commentmanager = new CommentManager();
	$commentmanager->validecomment($_GET['id']);
	header('location:admin.php?comment=comments');
}

function intro() {
	require('../view/intro.php');
}