<?php $title = "L'auteur"; ?>
<?php ob_start(); ?>

<div class="container">
	<div class="carte">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<div class="card">
			<div class="box">
				<div class="img">
					<img src="assets/pictures/jfo.jpg">
				</div>
				<h2>Jean Forteroche<br><span>Romancier 2.0</span></h2>
				<p> Juste un écrivain en plein élan, motivé par sa vision du monde, son goût pour l'aventure et les problèmes.</p>
				<span>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</span>
			</div>
		</div>
	</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/user/author_template.php"); ?>