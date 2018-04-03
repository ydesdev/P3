

<?php

$title = 'Admin billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10 text-center admin-spacing"><h2>Votre espace d'administration</div>
    </div>

    <div class="row">
        <div class="col-xs-offset-1 col-xs-8 col-sm-offset-1 col-sm-3 col-lg-offset-1 col-lg-3">
             <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="Public/photos/typingMachin.jpg" class="img-responsive img-rounded center-block" alt="Typing Machine">
                        <a href="index.php?action=writePost"> <h4>Ecrire un nouveau billet</h4></a>
                    </div>
             </div>
        </div>
        <div class="col-xs-offset-1 col-xs-8 col-sm-offset-1 col-sm-3 col-lg-offset-1 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="Public/photos/editing.jpg" class="img-responsive img-rounded center-block" alt="Editing Notebook">
                     <a href="index.php?action=displayEditForm"><h4>Modifier ou effacer un billet</h4></a>
                </div>
            </div>
        </div>
        <div class="col-xs-offset-1 col-xs-8 col-sm-offset-1 col-sm-3 col-lg-offset-1 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="Public/photos/openBook.jpg" class="img-responsive img-rounded center-block" alt="Open Book">
                    <a href="index.php?action=listPosts"><h4>Voir un billet et ses commentaires</h4></a>
                </div>
            </div>
        </div>
        <div class="col-xs-offset-1 col-xs-8 col-sm-offset-1 col-sm-3 col-lg-offset-1 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="Public/photos/bookAndGlasses.jpg" class="img-responsive img-rounded center-block" alt="bookAndGlasses">
                    <a href="index.php?action=reviewComments"><h4> Modérer les commentaires signalés </h4></a>
                </div>
             </div>
        </div>
        <div class="col-xs-offset-1 col-xs-8 col-sm-offset-1 col-sm-3 col-lg-offset-1 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="Public/photos/Notepad.jpg" class="img-responsive img-rounded center-block" alt="Notepad">
                    <a href="index.php?action=displayNotes"><h4> Bloc-notes</h4></a>
                </div>
            </div>
        </div>
        <div class="col-xs-offset-1 col-xs-8 col-sm-offset-1 col-sm-3 col-lg-offset-1 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="Public/photos/Envelope.jpg" class="img-responsive img-rounded center-block" alt="Envelope">
                    <a href="mailto:contact@skillbook.com"><h4> Besoin de nous contacter?</h4></a>
                </div>
             </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>
</div>

