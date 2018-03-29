<?php $title = 'Erreur dans le chargement de la page' ?>

<?php ob_start(); ?>
<h1> Oops!</h1>
<div class="error">
    <h3> <?php echo $e->getMessage(); ?></h3>

</div>
<br/>
<p><a href='index.php?action=listPosts'> Retour à la liste des billets</a></p>

<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>
