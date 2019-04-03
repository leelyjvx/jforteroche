<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>


<div class="spost">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="tiny">
					<h1 class="text-center jumbotron-hr display-4 p-4"> <?= $post->getTitle(); ?> </h1>
					<hr class="my-5">
					<article class="align-content-center tab-content"><p><?= $post->getContent(); ?></p></article>
					<hr class="my-5">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<form action="index.php?comment=addcomment" method="post">
					<div class="form-group">
						<fieldset><legend class="col-form-legend font-italic">Ajouter un commentaire?</legend>
							<input type="hidden" name="postID" value="<?= $post->getID(); ?>"/>
							<p><label for="pseudo" class="form-control-label">Votre pseudo :</label></p>
							<p><input type="text" name="pseudo" id="pseudo" placeholder="Max. 50 caractères" class="form-control-sm"></p>
							<p><label for="comment" class="form-control-label">Commentaire :</label></p>
							<p><textarea class="form-control" id="comment" name="comment"></textarea></p>
							<p><input type="submit" name="send_comment" value="Envoyer" class="btn btn-outline-dark"/></p>
						</fieldset>
						<hr class="my-2">
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<?php foreach ($comments as $comment) : ?>
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong><?= htmlspecialchars($comment->getPseudo()); ?></strong> dit : 	
						</div>
						<div class="panel-body">
							<em><?= htmlspecialchars($comment->getComment()); ?></em>
							<p><a class="btn btn-sm btn-danger" href="index.php?comment=report&id=<?=$comment->getid();?>"> Signaler </a></p>
							<hr class="my-3">
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("../view/templates/user/post_template.php") ?>  