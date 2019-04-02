<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>


<div class="spost">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="tiny">
					<h1 class="text-center jumbotron-hr display-4 p-4"> <?= $post->getTitle(); ?> </h1>
					<div class="space"></div>
					<article class="align-content-center tab-content"><p><?= $post->getContent(); ?></p></article>
				</div>
			</div>
		</div>
		<div class="row">

			
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("../view/templates/user/post_template.php") ?>  