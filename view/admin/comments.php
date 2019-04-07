<?php $title = 'Commentaires'; ?>

<?php ob_start(); ?>

<?php foreach ($comments as $comment) : ?>

	<div class="chapterid"> <em>Chapitre <?= $comment->getPostID();?></em></div>
	<div class="pseudo"> <h5><strong><?= $comment->getPseudo(); ?></strong></h5></div>
	<div class="comment"> <p><?= $comment->getComment(); ?></p></div>
	<p><a class="btn btn-sm btn-danger" href="admin.php?comment=deletecomment&id=<?= $comment->getID(); ?>"> Supprimer le commentaire? </a></p>

<?php endforeach; ?>	


<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php");?>