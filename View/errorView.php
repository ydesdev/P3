<?php $title = 'Erreur dans le chargement de la page' ?>

<?php ob_start(); ?>
<h1> Oops!</h1>
<div class="error">
    <p> Le serveur indique: <?php echo $e->getMessage(); ?></p>

</div>
<br/>
<p><a href='index.php'> Retour à la liste des billets</a></p>

<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>
