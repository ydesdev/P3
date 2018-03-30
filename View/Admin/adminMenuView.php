

<?php

$title = 'Admin billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10 text-center admin-spacing"><h2>Votre espace d'administration</div>
    </div>


    <div class="row">
        <div class="col-xs-5 col-sm-3">
             <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="Public/photos/typingMachin.jpg" class="img-responsive img-rounded center-block" alt="Typing Machine">
                        <a href="index.php?action=writePost"> <h5> Ecrire un nouveau billet</h5></a>
                    </div>
             </div>
        </div>

        <div class="col-xs-5 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="Public/photos/editing.jpg" class="img-responsive img-rounded center-block" alt="Editing Notebook">
                     <a href="index.php?action=displayEditForm"><h5>Modifier ou effacer un billet</h5></a>
                </div>
            </div>
        </div>
        <div class="col-xs-5 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="Public/photos/openBook.jpg" class="img-responsive img-rounded center-block" alt="Open Book">
                    <a href="index.php?action=listPosts"><h5> Voir un billet et ses commentaires</h5></a>
                </div>
            </div>
        </div>

        <div class="col-xs-5 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                <img src="Public/photos/bookAndGlasses.jpg" class="img-responsive img-rounded center-block" alt="bookAndGlasses">
                <a href="index.php?action=reviewComments"><h5> Modérer les commentaires signalés </h5></a>
                </div>
             </div>
        </div>
        <div class="col-xs-5 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                <img src="Public/photos/Notepad.jpg" class="img-responsive img-rounded center-block" alt="Notepad">
                <a href="index.php?action=displayNotes"><h5> Bloc-notes</h5></a>
                </div>
            </div>
        </div>
        <div class="col-xs-5 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                <img src="Public/photos/Envelope.jpg" class="img-responsive img-rounded center-block" alt="Envelope">
                <a href="mailto:contact@skillbook.com"><h5> Besoin de nous contacter?</h5></a>
                </div>
             </div>
        </div>
    </div>
</



<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>
</div>

