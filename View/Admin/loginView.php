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
            <div class="col-xs-offset-4 col-xs-4">
                <div class="jumbotron">
                    <h2 class="text-center"> S'identifier </h2>


                    <form action="index.php?action=login" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="identifiant" class="col-xs-6 control-label"> Identifiant: </label>
                            <div class="col-xs-6">
                                <input type="text" name="identifiant">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-xs-6 control-label">Mot de Passe: </label>
                            <div class="col-xs-6">
                                <input type="password" name="password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-xs-6 col-xs-push-6">
                                <input type="submit" class="btn btn-info" name="login" value="Login"/>
                            </div>
                        </div>
                    </form>

                    <p><a href="index.php"> Retour à la page d'accueil</a></p>
                </div>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>

