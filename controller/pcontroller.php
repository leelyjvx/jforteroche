<?php

require('../model/Post.php');
require('../model/PostManager.php');
require('../model/Comment.php');
require('../model/CommentManager.php');
require('../model/Admin.php');
require('../model/AdminManager.php');


function intro() {
	require("../view/intro.php");
}


function add_min() {
	$admin = new Admin($_POST['username'], password_hash($_POST['password'],PASSWORD_DEFAULT));
	$adminmanager = new AdminManager();
	$adminmanager->add($admin);
}

function create_admin() {
	require("../view/admin/create_admin.php");
}

function connect() { // Affichage page connexion -- go to connect page
	require("../view/admin/connect.php");
}

function author() { // Aller à la page auteur -- Go to author page
	require("../view/user/author.php");
}

function chapters() { // Affichage de tous les articles en public -- shows all posts to users
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

function addcomment() { // Ecrire un commentaire -- function to create a comment
	$comment = new Comment($_POST['pseudo'], $_POST['comment']);
	$comment->setPostID($_POST['postID']);
	$manager = new CommentManager();
	$try = $manager->addComment($comment);
	header('location:index.php?page=chapters');
}

function report() {
	$commentmanager = new CommentManager();
	$comment = $commentmanager->report($_GET['id']);
	header('location:index.php?page=chapters');
}

