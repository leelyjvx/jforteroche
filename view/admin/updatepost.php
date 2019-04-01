 <?php $title = "Modifier l'article"; ?>

<?php ob_start();?>


<form action = "index.php?admin=updatepost" method = "post">
	<p><input type="hidden" name="id" value="<?= $post->getID();?>"></p>
	<p> <input type="text" class="form-control-sm" name="title" value="<?=$post->getTitle();?>"> </p>
	<p> <textarea name="content" cols="150" rows="22"> <?=$post->getContent(); ?> </textarea> </p>
	<p> <input type="submit" name="modif" class="btn btn-dark"> </p>
</form>

<?php $content = ob_get_clean();?>
<?php require("../view/templates/admin/admin_template.php");?>