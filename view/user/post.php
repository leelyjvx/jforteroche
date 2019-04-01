<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>

<div class="spost">
	<div class="container">
		<div class="row">
			<h1 class="modal-title bg-light text-center"> <?= $post->getTitle(); ?> </h1>
			<article class="align-content-center modal-content"><p><?= $post->getContent(); ?></p></article>
		</div>
		<div class="row">
			<div class="card col-lg-12 bg-light">
				<form action="index.php?comment=addcomment" method="post">
					<fieldset>
						<legend>Ajouter un commentaire</legend>
						<p><input type="hidden" name="postID" value="<?= $post->getID(); ?>"></p>
						<p><label for="pseudo"> Pseudo : </label></p>
						<p><input type="text" name="pseudo" id="pseudo" placeholder="Max. 50 caractères" required></p>
						<p><label for="comment"> Commentaire : </label></p>
						<p><textarea rows="5" cols="100" name="comment" id="comment" required > </textarea></p>
						<p><input type="submit" name="send_comment" value="Envoyer mon commentaire" class="btn btn-dark"></p>

					</fieldset>
				</form>
			</div>
		</div>
		<div class="row">
			
			<?php foreach ($comments as $comment) : ?>
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong><?= htmlspecialchars($comment->getPseudo()); ?></strong>		
						</div>
						<div class="panel-body">
							</div><?= htmlspecialchars($comment->getComment()); ?>

							<p><a class="btn btn-sm btn-danger" href="index.php?comment=report&id=<?=$comment->getid();?>"> Signaler </a></p>
						</div>
					</div>

				<?php endforeach; ?>
			</div>

		</div>
	</div>

	<?php $content = ob_get_clean(); ?>

	<?php require("../view/templates/user/user_template.php") ?>  