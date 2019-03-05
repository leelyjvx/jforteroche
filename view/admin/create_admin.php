<?php $title = 'Admin';?>
<?php ob_start(); ?>

<form action="../public/index.php?action=add_min" method="post">
	
	<p><label for="username"> User : </label>
		<input type="text" name="username" id="username"> </p>
		<p><label for="password"> Pass : </label>
			<input type="password" name="password" id="password"> </p>
		<input type="submit" name="Send" value="envoi">

		</form>

		<?php $content = ob_get_clean(); ?>
		<?php require('../view/templates/admin/connect_template.php'); ?>