<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>

<div class="container">
	<div class="row">
		<div class="card col-sm-6">
			<div class="card-body">
				<div class="card-title jumbotron">Espace restreint</div>
				<div class="card-img-top"><img src="assets/pictures/User_Avatar_2.png" width="50" class="img-thumbnail"></div>
				<div class="input-group">
					<div class="form-control-plaintext">
						<form action="admin.php?connect=valide" method="post">
							<p><input type="text" name="username" id="user" placeholder="Identifiant" required autofocus></p>
							<p><input type="password" name="password" id="password" placeholder="Mot de passe"></p>
							<button class="btn btn-light">Connexion</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../view/templates/admin/connect_template.php');?>

</body>
</html>