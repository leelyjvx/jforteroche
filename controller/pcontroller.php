<?php

require('../model/Post.php');
require('../model/PostManager.php');
require('../model/Comment.php');
require('../model/CommentManager.php');
require('../model/Admin.php');
require('../model/AdminManager.php');


function intro() { // Affichage page intro -- go to intro's page
	require("../view/intro.php");
}

function connect() { // Affichage page connexion -- go to connect page
	require("../view/admin/connect.php");
}

function valide() {
	
	$admin = new Admin($_POST['username'], $_POST['password']);
	$adminmngr = new AdminManager();
	$session = $adminmngr->check($admin);

	if ($session === false) {
		header("location:../public/user.php?user=connect");
		exit();

	} else {

		session_start();
		//session_register($_POST['username']);
		$_SESSION['username'] = $_POST['username'];
		header('location:../public/index.php?admin=admin');	
	}
}

function author() { // Aller à la page auteur -- Go to author page
	require("../view/user/author.php");
}

function chapters() { // Affichage de tous les articles en public -- shows all posts to users
	$manager = new PostManager();
	$posts = $manager->read();
	require("../view/user/chapters.php");
}

function post() { // Affichage d'un article précis et de ses commentaires -- shows one post and its comments
	$manager = new PostManager();
	$post = $manager->readID($_GET['id']);
	$commentmanager = new CommentManager();
	$comments = $commentmanager->readComments($_GET['id']);
	require("../view/user/post.php");
}

function addcomment() { // Ecrire un commentaire -- function to create a comment
	$comment = new Comment($_POST['pseudo'], $_POST['comment']);
	$comment->setPostID($_POST['postID']);
	$manager = new CommentManager();
	$try = $manager->addComment($comment);
	header('location:../public/user.php?user=chapters');
}

function report() {
	$commentmanager = new CommentManager();
	$comment = $commentmanager->report($_GET['id']);
}

