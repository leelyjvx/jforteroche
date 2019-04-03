<?php $title = "Chapitres"; ?>
<?php ob_start(); ?>

<div class="row">
	<div class="tiny">
		<div class="col-lg-12">
			<?php foreach ($posts as $post) :  ?>
				<div class="card-body bg-light">
					<div class="chapterstitle"><h3 class="card-title jumbotron text-center"><a href="index.php?page=post&id=<?= $post->getID();?>"><?= $post->getTitle(); ?></a></h3></div>
					<p class="card-text"><?= substr($post->getContent(), 0, 400); ?> ... </p>
					<a class="btn btn-outline-dark text-center col-lg-12" href="index.php?page=post&id=<?= $post->getID();?>">Lire la suite</a>
					<hr class="p-0">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/user/user_template.php");?> 