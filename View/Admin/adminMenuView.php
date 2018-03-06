// A faire: traitement vers controlleur

<?php

$title = 'Admin billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<h1> Admmin : Billet simple pour l'Alaska</h1>
<h2> Bonjour Jean! </h2>
<p> Que voulez-vous faire?  </p> <!-- a faire en tableau avec boutons radios ou liens pour traitement dans admin manager !-->
<ul>
    <li><a href="index.php?action=writePost"> Ecrire un nouveau billet</a></li>
    <li><a href="index.php?action=editPost">Modifier ou effacer un billet</a> </li>
    <li><a href="index.php?action=listPosts">Voir un billet et ses commentaires, ajouter un commentaire<a> </li>
    <li><a href="index.php?action=reviewComments">Voir tous les commentaires signalés et les traiter</a></li>
    <li><a href="mailto:contact@skillbook.com">Nous contacter</a> </li>
</ul>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>