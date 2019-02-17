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

/* Partie ADMIN/CRUD jusque ligne 69 */

function connect() { // Affichage page connexion -- go to connect page
	require("../view/admin/connect.php");
}

function valide() {
	
	$admin = new Admin($_POST['username'], $_POST['password']);
	$adminmngr = new AdminManager();
	$session = $adminmngr->check($admin);

	if ($session === false) {
		header("location:../public/index.php?action=connect");
		exit();

	} else {

		session_start();
		//session_register($_POST['username']);
		$_SESSION['username'] = $_POST['username'];
		header('location:../public/index.php?action=admin');	
	}
}

function auth() {

	session_start();
	if (!isset($_SESSION['username'])) {
		header('location:../public/index.php?action=connect');
	}
}

function is_connect() {
	return isset($_SESSION['username']);
}

function disconnect() {

	session_start();
	session_destroy();
	header('location:../public/index.php?action=intro');

}

	// &fctn verif sessO
	// if id = valide / ouvrir sess
	// if session en cours // SESSION STATUTS?
	// Laisse passer
	// Else form connexion

	/*$isCorrect = password_verify($_POST['password'], $result['password']);

	if (!$is_correct) {
		echo "Nop";
	} else {
		if ($isCorrect) {
			session_start();
		}
	}*/

function admin() { // Affichage menu admin -- go to admin page
	require("../view/admin/admin.php");
}

function addpost() { // Ajouter un article -- function to create a post
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
$content = "<p> L'article a bien été supprimé! </p> </br> <a href='../public/index.php?action=readposts' class='btn btn-dark'> Retour à la liste </a>";
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
	header('location:../public/index.php?action=chapters');
}

function readcomment() {
	$commentmanager = new CommentManager();
	$comment = $commentmanager->readcomment($_GET['id']);
	echo $comment->getPostID() . '</br>';
	echo $comment->getPseudo() . '</br>';
	echo $comment->getComment();
	var_dump($comment);
}

function report() {
	$commentmanager = new CommentManager();
	$comment = $commentmanager->report($_GET['id']);
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
}

function validecomment() {
	$commentmanager = new CommentManager();
	$commentmanager->validecomment($_GET['id']);
}