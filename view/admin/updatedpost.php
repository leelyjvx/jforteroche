<?php $title = $post->getTitle(); ?>

<?php ob_start(); ?>

<div class="title_unique"><h3> <?= $post->getTitle();?> </h3></div>
<div class="content_unique"><h5> <?= $post->getContent();?> </h5></div>


<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php"); ?>