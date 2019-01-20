<?php

include('../model/Post.php');
include('../model/PostManager.php');


// Création de post et enregistrement en BDD

if (isset($_POST['title']) && $_POST['title'] !== '' AND isset($_POST['content']) && $_POST['content'] !== '' AND isset($_POST['create'])) {
	
	$article = new Post($_POST['title'], $_POST['content']);
	$manager = new PostManager();
	$manager->add($article);
	echo "Félicitations ! Votre article a bien été enregistré.";
	echo "<p>" . $article->getTitle() . "</p>" ;
	echo "<p>" . $article->getContent() . "</p>";
	echo " <p> <a href = ../view/posts_edit.php> Retour </a> ";
} 

// Lecture de tous les posts

if (isset($_POST['read_all'])) {

	$manager = new PostManager();
	$posts = $manager->read();

	var_dump($posts);

	foreach ($posts as $post) {
		echo "<p> Titre : " . $post->getTitle() . "</p>" ;
		echo "<p> Contenu : " . $post->getContent() . "</p>";
	}

	echo "<p> <a href = ../view/posts_edit.php> Retour </a> ";
}

// Lecture d'un seul post

if (isset($_POST['id']) && $_POST['id'] !== '' AND isset($_POST['read_by_id'])) {
	
	$manager = new PostManager();
	$post = $manager->readID($_POST['id']);

	echo $post->getTitle() . "<br/>" ;
	echo $post->getContent() . "<br/>" ;
	echo ' <form action = "#" method = "post">' ;
	echo ' <p> <input type = "submit" name = "delete" value = "Supprimer cet article."/> </p>' ;
	echo ' <p> <input type = "submit" name = "update" value = "Modifier cet article. " </p> ' ;
	echo ' <p> <a href = "../view/posts_edit.php"> Retour </a> </p> ' ;
	echo ' </form>' ;

}

// Suppression d'un post 

if (isset($_POST['id_delete']) && $_POST['id_delete'] !== '' AND isset($_POST['delete'])) {

	echo "L'article est supprimé!";

	$manager = new PostManager();
	$post = $manager->delete($_POST['id_delete']);
	var_dump($post);
}

// Modification d'un post

if (isset($_POST['id_update']) && $_POST['id_update'] !== '' AND isset($_POST['update'])) {
	
	$manager = new PostManager();
	$post = $manager->readID($_POST['id_update']);

	echo '<form action = "#" method = "post">';
	echo '<p> <input type="text" name="id" value="' .$post->getID(). '"> </p>';
	echo '<p> <input type="text" name="title" value="' .$post->getTitle(). '"> </p>';
	echo '<p> <textarea name="content">' .$post->getContent(). '</textarea> </p>';
	echo '<p> <input type="submit" name="modif">' ;
}

if (isset($_POST['id']) && $_POST['id'] !== '' AND isset($_POST['title']) && $_POST['title'] !== '' AND isset($_POST['modif'])) {
	
	$post = new Post($_POST['title'], $_POST['content']);
	$post->setID($_POST['id']);
	var_dump($post);
	$manager = new PostManager();
	$manager->update($post);
}



// Modification d'un article.
// Recup article avec id;
// Afficher contenu dans form
// Value = <?= oiu->getTitle() >
// Mdif BDD
// Une fois form fourni->créer objet post(donnees form)


