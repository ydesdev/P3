<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 01/03/2018
 * Time: 16:56
 */

$title = 'Billet simple pour l\'Alaska'; ?>
<?php ob_start(); ?>

<div class="container">
    <div class="row col-xs-offset-1 col-xs-10">
        <div class="panel fade in collapse" >
            <div class="panel-heading">
                <button type="button" class="close" data-toggle="collapse" data-dismiss="panel">
                    <span aria-hidden="true"></span>
                    <span class="sr-only">Close</span>
                </button>&times
                <h2>Ecrire un nouveau chapitre</h2></div>
            <div class="panel-body">
                <form action="index.php?action=savePost" method="post">
                    <div class="col-xs-12 form-group">
                        <label for="title"> Titre :</label>
                        <input type="text" class="form-control" name="title" id="title"/>
                    </div>
                    <div class="col-xs-12 form-group">
                        <label for="content"> Texte :</label>
                        <textarea class="form-control" rows="10" name="content" id="content"></textarea>
                    </div>
                    <div class="col-xs-12 form-group">
                        <input type="submit" class="btn btn-primary" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <?php $content = ob_get_clean(); ?>

    <?php require('View/template.php'); ?>
</div>





