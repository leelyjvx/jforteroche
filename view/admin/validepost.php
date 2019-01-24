<?php $title = "Article enregistré!"; ?>

<?php ob_start(); ?>

<h4>Félicitations, votre article a bien été enregistré.</h4>
<h3> <?= $post->getTitle(); ?> </h3>
<p> <?= $post->getContent(); ?> </p>

<a class="btn btn-light" href="../public/index.php?action=admin"> Retour à l'accueil! </a>
<a class="btn btn-dark" href="../public/index.php?action=readposts"> Voir les autres articles </a>

<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php"); ?>