

<?php

$title = 'Admin billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <h1> Billet simple pour l'Alaska</h1>
        </div>
    </div>
    <div class="row">
         <div class="panel panel-default col-xs-offset-1 col-xs-4 col-md-offset-1 col-md-3">
                <div class="panel-body">
                    <img src="Public/photos/typingMachin.jpg" class="img-responsive img-rounded" alt="Typing Machine">
                </div>
                <div class="panel-footer">
                     <a href="index.php?action=writePost"> Ecrire un nouveau billet</a>
                </div>
         </div>

        <div class="panel panel-default col-xs-offset-1 col-xs-4 col-md-offset-1 col-md-3">
                <div class="panel-body">
                    <img src="Public/photos/editing.jpg" class="img-responsive img-rounded" alt="Editing Notebook">
                </div>
                <div class="panel-footer">
                     <a href="index.php?action=displayEditForm">Modifier ou effacer un billet</a>
                </div>
        </div>
        <div class="panel panel-default col-xs-offset-1 col-xs-4 col-md-offset-1 col-md-3">
            <div class="panel-body">
                <img src="Public/photos/openBook.jpg" class="img-responsive img-rounded" alt="Open Book">
            </div>
            <div class="panel-footer">
                <a href="index.php?action=listPosts">Voir un billet et ses commentaires</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default col-xs-offset-1 col-xs-4 col-md-offset-1 col-md-3">
            <div class="panel-body">
                <img src="Public/photos/bookAndGlasses.jpg" class="img-responsive img-rounded" alt="bookAndGlasses">
            </div>
            <div class="panel-footer">
            <a href="index.php?action=reviewComments">Modérer les commentaires signalés</a>
            </div>
        </div>
        <div class="panel panel-default col-xs-offset-1 col-xs-4 col-md-offset-1 col-md-3">
            <div class="panel-body">
                <img src="Public/photos/Notepad.jpg" class="img-responsive img-rounded" alt="Notepad">
            </div>
            <div class="panel-footer">
                <a href="index.php?action=displayNotes">Bloc-notes</a>
            </div>
        </div>

        <div class="panel panel-default col-xs-offset-1 col-xs-4 col-md-offset-1 col-md-3">
            <div class="panel-body">
                <img src="Public/photos/Envelope.jpg" class="img-responsive img-rounded" alt="Envelope">
            </div>
            <div class="panel-footer">
            <a href="mailto:contact@skillbook.com">Nous contacter</a>
            </div>
        </div>

    </div>



<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>
</div>

