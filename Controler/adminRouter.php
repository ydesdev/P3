<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 05/03/2018
 * Time: 10:54
 */
require_once('Model/Manager.php');
require_once('Controler/mainControler.php');
require_once('Controler/adminRouter.php');

class AdminRouter {

    public function AdminIdentification() {
        try {
            if (isset($_GET['action']) && $_GET['action'] == 'login') {
                if (!empty($_POST['identifiant']) && !empty($_POST['password'])) {
                    checkPassword($_POST['identifiant'], $_POST['password']);
                } else {
                    throw new Exception('Identifant et/ou mot de passe manquant(s)');
                }
            elseif(!isset($_SESSION['user'])) {

                displayLoginForm();
            }
            }
             } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            require('View/errorView.php');
            }


    public function AdminRouterQuery() {
        try {
            if (isset($_GET['action']) && $_GET['action'] == 'writepost') {
                addNewPost();
            }

            if (isset($_GET['action']) && $_GET['action'] == 'editpost') {}




            elseif
                (isset($_GET['action'])) {
                if ($_GET['action'] == 'amendComment') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        amendComment($_GET['id'], $_POST['changedcomment']);
                    } else {
                        throw new Exception('Tous les champs ne sont pas remplis ou aucun commentaire sélectionné!');
                    }
                }


            }catch
            (Exception $e) {
                    $errorMessage = $e->getMessage();
                    require('View/errorView.php');
                }

}
}
}