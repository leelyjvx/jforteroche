<?php $title = 'Administration'; ?>

<?php ob_start(); ?>

<div class="session">Bienvenue <?= $_SESSION['username']; ?>!</div>

<div class="welcome"> Cliquez sur le bouton 'Administration' en haut à gauche de votre écran pour commencer à naviguer à travers votre espace d'administration. </div>

<?php $content = ob_get_clean(); ?>
<?php require("../view/templates/admin/admin_template.php");?>