<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 05/03/2018
 * Time: 17:23
 */
 $title = htmlspecialchars($post['title']) ?>

<?php ob_start(); ?>



<?php ob_clean();?>
<?php require('View/template.php'); ?>

// fetch des commentaires flaggés, par ordre décroissant de flags

//pour chaque commentaire un bouton delete et un bouton ok

//un retour à la liste après chaque opération

//un lien de retour vers l'admin



