<?php $title = "Chapitres"; ?>
<?php ob_start(); ?>

<?php foreach ($posts as $post) : ?>

	<div class="card-group">
		<div class="card">
			<div class="card-body">
				<article>
					<h3 class="card-title"><a href="user.php?user=post&id=<?= $post->getID();?>"><?= $post->getTitle(); ?></a></h3>
					<p class="card-text"><?= substr($post->getContent(), 0, 400); ?> ... </p>
					<a class="btn btn-dark" href="user.php?user=post&id=<?= $post->getID();?>">lire la suite</a>
				</article>
			</div>
		</div>
	</div>

<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/user/user_template.php");?> 