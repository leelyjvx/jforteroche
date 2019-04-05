<?php $title = 'Affichage des articles'; ?>

<?php ob_start(); ?>


<?php foreach ($posts as $post) : ?>
	<div class="read_all">
		<div class="one">
			<div class="title_post"><h2><a href="admin.php?post=readpost&id=<?= $post->getID();?>"> <?= $post->getTitle(); ?> </a> </h2></div>
		</div>
		<div class="content_post"><p> <?= substr($post->getContent(), 0, 400); ?></p></div>
		<p>
			<a class="btn btn-success" href="admin.php?post=update&id=<?= $post->getID();?>" onclick="return confirm('Êtes-vous sûr de vouloir modifier cet article?')"> Modifier l'article </a>
			<a class="btn btn-danger" href="admin.php?post=deletepost&id=<?= $post->getID(); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')"> Supprimer l'article </a>
		</p>
	</div>
	<div class="separe"></div>

<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php");