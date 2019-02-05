<?php

require('../model/Post.php');
require('../model/PostManager.php');
require('../model/Comment.php');
require('../model/CommentManager.php');

function intro() { // Affichage page intro -- go to intro's page
require("../view/intro.php");
}

/* Partie ADMIN/CRUD jusque ligne 69 */

function connect() { // Affichage page connexion -- go to connect page
	require("../view/admin/connect.php");
}

function valide() {
	if ($_POST['username'] === 'jf' && $_POST['password'] === 'p3') {
		require('../view/admin/admin.php');
	} elseif ($_POST['username'] !== 'jf' && $_POST['password'] !==  'p3') {
		require('../view/admin/connect.php');
	}
}


function admin() { // Affichage menu admin -- go to admin page
	require("../view/admin/admin.php");
}

function addpost() { // Ajouter un article -- function to create a post
	$post = new Post($_POST['title'], $_POST['content']);
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
	$comment = new CommentManager();
	$comment->reported();
	require("../view/admin/reported.php");
}

function comments() {
	$commentmanager = new CommentManager();
	$comments = $commentmanager->comments();
	require("../view/admin/comments.php");
}