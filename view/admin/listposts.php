<?php $title = 'Affichage des articles'; ?>

<?php ob_start(); ?>

<?php foreach ($posts as $post) : ?>

	<h2> <?= $post->getTitle(); ?> </h2>
	<p> <?= $post->getContent(); ?> </p>
	<p>
		<a class="btn btn-success" href="../public/index.php?action=updatepost&id=<?= $post->getID();?>"> Modifier l'article </a>
		<a class="btn btn-danger" href="../../public/index.php?action=deletepost"> Supprimer l'article </a>
	</p>

<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>
<?php require("../public/templates/admin/admin_template.php");