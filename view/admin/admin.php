<?php $title = 'Administration'; ?>

<?php ob_start(); ?>

BIENVENUE <?= $_SESSION['username']; ?>

<div class="block_admin">
	<div class="admin">
		<div class="btn-block">
			<a href="admin.php?post=createpost" class="btn btn-light"> Créer un article </a>
			<a href="admin.php?post=readposts" class="btn btn-light"> Lire les articles </a>
			<a href="admin.php?comment=comments" class="btn btn-light"> Consulter tous les commentaires </a>
			<a href="admin.php?comment=reported" class="btn btn-light"> Commentaires signalés </a>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php");?>