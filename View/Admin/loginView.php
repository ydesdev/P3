<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 27/02/2018
 * Time: 15:05
 */
$title = 'Billet simple pour l\'Alaska'; ?>
<?php ob_start(); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2> S'identifier </h2>
                        <form action="index.php?action=accessAdmin" method="post">
                            <div class="col-xs-12 col-sm-8 form-group">
                                <label for="identifiant"> Identifiant: </label>
                                <input type="text" class="form-control" name="identifiant"/>
                            </div>
                            <div class="col-xs-12 col-sm-8 form-group">
                                <label for="password" class="control-label">Mot de Passe: </label>
                                <input type="password" class="form-control" name="password"/>
                            </div>
                             <div class="col-xs-8 col-sm-8 form-group">
                                <input type="submit" class="btn btn-info" name="login" value="Login"/>
                            </div>
                         </form>
                        <p><a href="index.php" class="col-xs-8"> Retour à la page d'accueil</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>

