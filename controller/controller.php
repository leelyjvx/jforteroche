<?php

/**
* Admin's controler
* 
*
* @author Lena>
*/

require('../model/Post.php');
require('../model/PostManager.php');
require('../model/Comment.php');
require('../model/CommentManager.php');
require('../model/Admin.php');
require('../model/AdminManager.php');


// Veryfies if a session is on or not and allows user to enter on admin's pages
function auth() {
	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:index.php?page=connect');
	}
}

// Closes admin session
function disconnect() {
	session_start();
	session_destroy();
	header('location:index.php?page=intro');
}

// Allows or not a user to enter admin's session
function valide() {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$adminmanager = new AdminManager();
	$verif = $adminmanager->check($username, $password);

	if (!$verif) {
		header("location:index.php?page=connect");
		exit();
	}
	else {
		session_start();
		$_SESSION['username'] = $_POST['username'];
		header("location:admin.php?page=admin");
	}
}

// Admin's homepage
function admin() { 
	require("../view/admin/admin.php");
}

// Allows admin to create a post
function addpost() {
	$post = new Post(htmlspecialchars_decode($_POST['title']), htmlspecialchars_decode($_POST['content']));
	$manager = new PostManager();
	$manager->addpost($post);
	require("../view/admin/validepost.php");
}

// Form post creation's page
function createpost() { 
	require("../view/admin/createpost.php");
}	

// Redirects to the page where all the posts are readable
function readposts() { 
	$manager = new PostManager();
	$posts = $manager->read();
	require("../view/admin/listposts.php");	
}

// Allows admin to read a post by its ID
function readpost() {
	$manager = new PostManager();
	$post = $manager->readID($_GET['id']);
	require("../view/admin/uniquepost.php");
}

// Allows admin to delete a post
function deletepost() { 
	$manager = new PostManager();
	$manager->delete($_GET['id']);
	$title = "Article supprimé";
	$content = "<p> L'article a bien été supprimé! </p> </br> <a href='admin.php?post=readposts' class='btn btn-dark'> Retour à la liste </a>";
	require("../view/templates/admin/admin_template.php");
}

// Update posts page
function update() { 
	$manager = new PostManager();
	$post = $manager->readID($_GET['id']);
	require("../view/admin/updatepost.php");
}

// Update posts form
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

// Allows admin to read comments
function readcomment() {
	$commentmanager = new CommentManager();
	$comment = $commentmanager->readcomment($_GET['id']);
	echo $comment->getPostID() . '</br>';
	echo $comment->getPseudo() . '</br>';
	echo $comment->getComment();
	var_dump($comment);
}

// Shows reported comments
function reported() {
	$commentmanager = new CommentManager();
	$comments = $commentmanager->reported();
	require("../view/admin/reported.php");
}

// Redirects to admin's comments page
function comments() {
	$commentmanager = new CommentManager();
	$comments = $commentmanager->comments();
	require("../view/admin/comments.php");
}


// Allows admin to delete comment
function deletecomment() {
	$commentmanager = new CommentManager();
	$commentmanager->deletecomment($_GET['id']);
	header('location:admin.php?comment=comments');
}



// Allows admin to ignore reported comments
function validecomment() {
	$commentmanager = new CommentManager();
	$commentmanager->validecomment($_GET['id']);
	header('location:admin.php?comment=comments');
}

// Redirects to website's homepage
function intro() {
	require('../view/intro.php');
}