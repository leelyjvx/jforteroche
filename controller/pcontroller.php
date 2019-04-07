<?php

/**
* User's controler
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

// Website homepage
function intro() {
	require("../view/intro.php");
}

// Connect form page
function connect() { 
	require("../view/admin/connect.php");
}

function create_admin() {
	require('../view/admin/create_admin.php');
}


// Creates account
function add_min() {
	$admin = new Admin($_POST['username'], $_POST['password']);
	$adminmanager = new AdminManager();
	$adminmanager->add($admin);
	require ('../view/admin/connect.php');
}


// Author's description page
function author() { 
	require("../view/user/author.php");
}

// Public list of posts
function chapters() { 
	$manager = new PostManager();
	$posts = $manager->read();
	require("../view/user/chapters.php");
}

// Shows one post by its ID and its comments
function post() {
	$manager = new PostManager();
	$post = $manager->readID($_GET['id']);
	$commentmanager = new CommentManager();
	$comments = $commentmanager->readComments($_GET['id']);
	require("../view/user/post.php");
}

// Allows an user to post comment
function addcomment() { 
	$comment = new Comment($_POST['pseudo'], $_POST['comment']);
	$comment->setPostID($_POST['postID']);
	$manager = new CommentManager();
	$try = $manager->addComment($comment);
	header("location:".  $_SERVER['HTTP_REFERER']);
}

// Allows an user to report comment
function report() {
	$commentmanager = new CommentManager();
	$comment = $commentmanager->report($_GET['id']);
	header("location:".  $_SERVER['HTTP_REFERER']);
}

