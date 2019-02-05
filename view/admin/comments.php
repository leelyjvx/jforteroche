<?php $title = 'Commentaires'; ?>

<?php ob_start(); ?>

<?php foreach ($comments as $comment) : ?>

	<em>Chapitre <?= $comment->getPostID();?></em>
	<h5><strong><?= $comment->getPseudo(); ?></strong></h5>
	<p><?= $comment->getComment(); ?></p>
	<p><a class="btn btn-danger" href="../../public/index.php?action=deletecomment&id=<?= $comment->getID(); ?>"> Supprimer le commentaire? </a></p>

<?php endforeach; ?>	


<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php");?>