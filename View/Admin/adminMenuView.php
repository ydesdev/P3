

<?php

$title = 'Admin billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <h1> Billet simple pour l'Alaska</h1>
        </div>
        <div class="col-md-offset-3 col-md-9">
            <h2> Bonjour Jean, </h2>
        </div>

    <div class="row">
         <div class="panel panel-default col-md-offset-1 col-md-3">
                <div class="panel-body">
                    <img src="Public/photos/typingMachin.jpg" class="img-thumbnail" alt="Typing Machine">
                </div>
                <div class="panel-footer">
                     <a href="index.php?action=writePost"> Ecrire un nouveau billet</a>
                </div>
         </div>

        <div class="panel panel-default col-md-offset-1 col-md-3">
                <div class="panel-body">
                    <img src="Public/photos/editing.jpg" class="img-thumbnail" alt="Editing Notebook">
                </div>
                <div class="panel-footer">
                     <a href="index.php?action=displayEditForm">Modifier ou effacer un billet</a>
                </div>
        </div>
        <div class="panel panel-default col-md-offset-1 col-md-3">
            <div class="panel-body">
                <img src="Public/photos/openBook.jpg" class="img-thumbnail" alt="Open Book">
            </div>
            <div class="panel-footer">
                <a href="index.php?action=listPosts">Voir un billet et ses commentaires, ajouter un commentaire</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default col-md-offset-2 col-md-3">
            <div class="panel-body">
                <img src="Public/photos/bookAndGlasses.jpg" class="img-thumbnail" alt="bookAndGlasses">
            </div>
            <a href="index.php?action=reviewComments">Voir tous les commentaires signalés et les traiter</a>
        </div>
        <div class="panel panel-default col-md-offset-2 col-md-3">
            <div class="panel-body">
                <img src="Public/photos/Envelope.jpg" class="img-thumbnail" alt="Envelope">
            </div>
            <a href="mailto:contact@skillbook.com">Nous contacter</a>
        </div>

    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>