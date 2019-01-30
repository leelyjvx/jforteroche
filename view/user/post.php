<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>


<p><?= $post->getTitle(); ?></p>
<p><?= $post->getContent(); ?></p>

<div class="card">
	<form action="../public/index.php?action=addcomment" method="post">
		<fieldset>

			<legend>Ajouter un commentaire</legend>
			<p><input type="hidden" name="postID" value="<?= $post->getID(); ?>"></p>
			<p><label for="pseudo"> Pseudo : </label></p>
			<p><input type="text" name="pseudo" id="pseudo" placeholder="Max. 50 caractères"></p>
			<p><label for="comment"> Commentaire : </label></p>
			<p><textarea rows="10" cols="151" name="comment" id="comment" > </textarea></p>
			<p><input type="submit" name="send_comment" value="Envoyer mon commentaire" class="btn btn-light"></p>

		</fieldset>
	</form>
</div>

<div class="card">
	<?php foreach ($comments as $comment) : ?>

		<p><strong><?= $comment->getPseudo(); ?></strong></p>
		<p><?= $comment->getComment(); ?></p>
		<p><a href="index.php?action=report&id=<?= $comment->getID(); ?>" class="btn btn-danger" onclick="return confirm('Voulez-vous signaler ce commentaire?')"> Signaler ce commentaire </a></p>

	<?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require("../view/templates/user/user_template.php") ?>  