

<?php $title = 'Administration'; ?>

<?php ob_start(); ?>

<div class="admin_home">
	<div class="posts_admin">
		<div class="btn-group-md">
			<fieldset>
				<legend>Gestion des articles</legend>
				<a class="btn btn-dark" href="../public/index.php?action=createpost"> Créer un article </a>
				<a class="btn btn-dark" href="../public/index.php?action=readposts"> Lire les articles </a>
			</fieldset>
		</div>
	</div>
	<div class="comments_admin">
		<div class="btn-group-md">
			<fieldset>
				<legend>Gestion des commentaires</legend>
				<a class="btn btn-dark" href="../public/index.php?action=readcomments"> Voir les commentaires </a>
				<a class="btn btn-dark" href="../public/index.php?action=reportedcomments"> Commentaires signalés </a>	
			</fieldset>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('..\view\templates\admin\admin_template.php');