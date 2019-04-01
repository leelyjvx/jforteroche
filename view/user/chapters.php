<?php $title = "Chapitres"; ?>
<?php ob_start(); ?>

<div class="posts">
	<?php foreach ($posts as $post) :  ?>

		<div class="container">
			<div class="row">
				<div class="tiny">
					<div class="album py-5 bg-light">
						<div class="container">

							<div class="card-group">
								<div class="row">
									<div class="col-md-12">
										<div class="card mb-6 box-shadow input-group-lg">
											<h3 class="card-title jumbotron"><a href="index.php?page=post&id=<?= $post->getID();?>"><?= $post->getTitle(); ?></a></h3>
											<div class="card-body">
												<p class="card-text"><?= substr($post->getContent(), 0, 400); ?> ... </p>
												<div class="d-flex justify-content-between align-items-center">
													<div class="btn-group">
														<a class="btn btn-light" href="index.php?page=post&id=<?= $post->getID();?>">lire la suite</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/user/user_template.php");?> 