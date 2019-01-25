<?php

require('../model/Post.php');
require('../model/PostManager.php');
require('../model/Comment.php');
require('../model/CommentManager.php');

function intro() {
	require("../view/intro.php");
}

/* Partie ADMIN/CRUD jusque ligne 69 */

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

function author() {
	require("../view/user/author.php");
}

function chapters() {
	$manager = new PostManager();
	$posts = $manager->read();
	require("../view/user/chapters.php");
}

function post() {
	$manager = new PostManager();
	$post = $manager->readID($_GET['id']);
	$commentmanager = new CommentManager();
	$comments = $commentmanager->readComments($_GET['id']);
	require("../view/user/post.php");

}

function addcomment() {
	$comment = new Comment($_POST['pseudo'], $_POST['comment']);
	$comment->setPostID($_POST['postID']);
	$manager = new CommentManager();
	$try = $manager->addComment($comment);
}