// A faire: traitement vers controlleur

<?php

$title = 'Admin billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<h1> Admmin : Billet simple pour l'Alaska</h1>
<h2> Bonjour Jean! </h2>
<p> Que voulez-vous faire?  </p> <!-- a faire en tableau avec boutons radios ou liens pour traitement dans admin manager !-->
<ul>
    <li>Ecrire un nouveau billet</li>
    <li>Modifier ou effacer un billet </li>
    <li>Voir un billet et ses commentaires, ajouter un commentaire </li>
    <li>Voir les commentaires signalés et les traiter</li>
    <li>Nous contacter </li>
</ul>


    <?php

}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>