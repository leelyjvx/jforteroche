<?php $title = 'Commentaires'; ?>

<?php ob_start(); ?>

<?php foreach ($comments as $comment) : ?>

	<?= $comment->getPostID();?>
	<h5><strong><?= $comment->getPseudo(); ?></strong></h5>
	<p><?= $comment->getComment(); ?></p>

<?php endforeach; ?>	


<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php");?>