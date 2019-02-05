<?php $title = 'Commentaires signalés'; ?>
<?php ob_start(); ?>

<?php foreach ($comments as $comment) : ?>

	<p><em>Chapitre <?= $comment->getPostid(); ?> </em></p>
	<p><strong> <?= $comment->getPseudo(); ?> </strong></p>
	<p><?= $comment->getComment(); ?></p>
	<p><a href="../public/index.php?action=deletecomment&id=<?=$comment->getID(); ?>"> Supprimer le commentaire? </a></p>

<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>
<?php require('../view/templates/admin/admin_template.php'); ?>