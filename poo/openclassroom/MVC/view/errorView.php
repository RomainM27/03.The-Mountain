<?php $title = "Erreur !"; ?>

<?php ob_start(); ?>
<H1>Il y a eu une petit problème oups</H1>

<p>L'erreur est : <?= $errorMessage ?></p>

<a href="index.php">Retourner sur la listes des billets</a>
<?php $content = ob_get_clean(); ?>

<?php require('frontend/template.php'); ?>