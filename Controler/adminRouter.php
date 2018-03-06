<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 05/03/2018
 * Time: 10:54
 */

require_once('Controler/adminControler.php');

class AdminRouter extends MainRouter {

    //if isset $_SESSION: { if, if if }
    //else !isset $_SESSION: displaylogginform()

    public function AdminRouterQuery(){
        try {
            if (isset($_SESSION['user'])) {
                if (isset($_GET['action']) && $_GET['action'] == 'writePost') {
                    if (!empty($_POST['title']) && !empty($_POST['content'])) {
                        addNewPost($_POST['title'], $_POST['content']);
                    } else {
                        throw new Exception('Erreur: tous les champs ne sont pas remplis!');
                    }
                }

                if (isset($_GET['action']) && $_GET['action'] == 'editPost') {
                    if (isset($_GET['id'])) {
                        editPost($_GET['id'], $_POST['title'], $_POST['content']);
                    } else {
                        throw new Exception('Aucun billet selectionné');
                    }
                }
                if (isset($_GET['action']) && $_GET['action'] == 'reviewComments') {
                    mostFlaggedComments();

                }
                if (isset($_GET['action']) && $_GET['action'] == 'moderateComment') {
                    if (isset($_GET['id'])) {
                        moderateComment();
                    }
                }
                if (isset($_GET['action']) && $_GET['action'] == 'okComment') {

                }
                }
            if (isset($_GET['action']) && $_GET['action'] == 'login') {
                if (!empty($_POST['identifiant']) && !empty($_POST['password'])) {
                    checkPassword($_POST['identifiant'], $_POST['password']);
                } else {
                    throw new Exception('Identifant et/ou mot de passe manquant(s)');
                }
            }
            elseif(!isset($_SESSION['user'])) {

                displayLoginForm();
            }

        }catch
        (Exception $e) {
            $errorMessage = $e->getMessage();
            require('View/errorView.php');
        }

    }


/*    public function AdminIdentification() {
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
*/
}