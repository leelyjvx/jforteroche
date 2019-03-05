<?php $title = 'Administration'; ?>

<?php ob_start(); ?>

BIENVENUE <?= $_SESSION['username']; ?>

<div class="block_admin">
	<div class="admin">
		<div class="btn-block">
			<a href="../public/index.php?admin=createpost" class="btn btn-light"> Créer un article </a>
			<a href="../public/index.php?admin=readposts" class="btn btn-light"> Lire les articles </a>
			<a href="../public/index.php?admin=comments" class="btn btn-light"> Consulter tous les commentaires </a>
			<a href="../public/index.php?admin=reported" class="btn btn-light"> Commentaires signalés </a>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php");?>