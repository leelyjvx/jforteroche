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
	require("../public/templates/admin/admin_template.php");
	echo $post->getTitle() . "</br>" ;
	echo $post->getContent() . "</br>" ;
}

function readposts() {
	$manager = new PostManager();
	$posts = $manager->read();
	require("../view/admin/listposts.php");	
}

/*function deletepost() {
	$manager = new PostManager();
	$manager->
}

function updatepost() {

}
*/