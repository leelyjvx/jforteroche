

<?php $title = 'Administration'; ?>

<?php ob_start(); ?>

<div class="card-body">
	<form action="../public/index.php?action=addpost" method="post">
		<fieldset>
			<legend> Créer un article </legend>
			<p>
				<p><label for="title" class="form-control-label"> Titre : </label></p>
				<p><input class="form-control-md" type="text" name="title" id="title" autofocus required></p>

				<p><label for="content" class="form-control-label"> Contenu : </label></p>
				<p><textarea name="content" id="content" rows="13" cols="50"></textarea></p>

				<p><input type="submit" name="addpost" class="btn btn-outline-dark" value="Créer un article"></p>
			</p>

		</fieldset>
	</form>
</div>
<div class="card-body">
	<p> Partie 2 : Affichage des derniers articles </p>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('..\view\templates\admin\admin_template.php');