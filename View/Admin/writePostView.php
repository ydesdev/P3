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
        <div class="panel panel-default fade in collapse" >
            <div class="panel-heading">
                <a class="close" href="index.php?action=accessAdmin"> <span class="glyphicon glyphicon-remove-circle"></span></a>

                <h2>Ecrire un nouveau chapitre</h2>
            </div>
            <div class="panel-body">
                <form action="index.php?action=savePost" method="post">
                    <div class="col-xs-12 form-group">
                        <label for="title"> Titre :</label>
                        <input type="text" class="form-control" name="title" id="title"/>
                    </div>
                    <div class="col-xs-12 form-group">
                        <label for="content"> Texte :</label>
                        <textarea class="form-control tinymce" rows="10" name="content" id="content"></textarea>
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





