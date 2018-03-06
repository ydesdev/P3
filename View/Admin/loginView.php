<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 27/02/2018
 * Time: 15:05
 */

ob_start(); ?>
    <h5> S'identifier </h5>



    <form action="Controler/adminRouter.php?action=login" method="post">
        <div>
            <label> Identifiant</label>
            <input type="text" name="identifiant">
        </div>
        <div>
           <label>Mot de Passe </label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="login" />
        </div>
    </form>

    <p><a href="index.php"> Page d'accueil</a></p>

<?php $content = ob_get_clean(); ?>

<?php require('View/template.php'); ?>