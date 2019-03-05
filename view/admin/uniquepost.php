<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>

<div class="title_unique"><h3> <?= $post->getTitle();?> </h3></div>
<div class="content_unique"><h5> <?= $post->getContent();?> </h5></div>


<div class="buttons">
	<a href="../public/index.php?admin=update&id=<?= $post->getID(); ?>" class="btn btn-success"  onclick="return confirm('Êtes-vous sûr de vouloir modifier cet article?')"> Modifier l'article </a>
	<a href="../public/index.php?admin=deletepost&id=<?= $post->getID(); ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article?')"> Supprimer l'article</a>
</div>


<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php"); ?>