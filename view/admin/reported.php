<?php $title = 'Commentaires signalés'; ?>
<?php ob_start(); ?>


<div class="reported">
	<div class="card-body bg-dark">
		<?php foreach ($comments as $comment) : ?>

			<div class="chapterid"><p><em>Chapitre <?= $comment->getPostid(); ?> </em></p></div>
			<div class="pseudo"><p><strong> <?= $comment->getPseudo(); ?> </strong></p></div>
			<div class="comment"><p><?= $comment->getComment(); ?></p></div>
			<p><a class="btn btn-danger" href="admin.php?comment=deletecomment&id=<?=$comment->getID(); ?>"> Supprimer le commentaire? </a></p>
			<p><a class="btn btn-success" href="admin.php?comment=validecomment&id=<?=$comment->getID(); ?>"> Ignorer </a></p>

		<?php endforeach; ?>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../view/templates/admin/admin_template.php'); ?>