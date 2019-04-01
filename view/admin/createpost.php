<?php $title = "Création d'article"; ?>

<?php ob_start();?>


<center><form action="index.php?admin=addpost" method="post">
	<fieldset>
		<p>
			<p><label for="title" class="form-control-label"> Titre : </label></p>
			<p><input class="form-control-md" type="text" name="title" id="title" autofocus required></p>

			<p><label for="content" class="form-control-label"> Contenu : </label></p>
			<p><textarea name="content" id="content" rows="15" cols="150"></textarea></p>

			<p><input type="submit" name="addpost" class="btn btn-dark" value="Créer un article"></p>
		</p>

	</fieldset>
</form></center>

<?php $content = ob_get_clean();?>
<?php require('../view/templates/admin/admin_template.php');?>