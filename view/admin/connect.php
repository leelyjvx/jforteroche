<?php $title = 'Connexion'; ?>
<?php ob_start(); ?>

<div class="log">
	<div class="row">
		<div class="col-lg-12">
			<div class="d-flex justify-content-center align-items-center p-5 mb-5">
				<div class="card align-content-center">
					<div class="card-blockquote text-center"> Identification </div>
					<div class="card-body">
						<form action="#" method="post" class="form-group">
							<p><input type="text" name="username" class="form-control-md pY-3" placeholder="Identifiant" required autofocus></p>
							<p><input type="password" name="password" class="form-control-md pY-3" placeholder="Mot de passe " required></p>
							<p><input type="submit" name="connect" class="btn btn-outline-warning" value="connexion"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../view/templates/admin/connect_template.php');?>
