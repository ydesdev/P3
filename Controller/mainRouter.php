<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 05/03/2018
 * Time: 10:54
 */

require_once('Model/Manager.php');
require_once('Controller/mainController.php');

class MainRouter
{

    public function MainRouterQuery()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'listPosts') {
                    listPosts();
                } elseif ($_GET['action'] == 'post') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        post();
                    } else {
                        throw new Exception('Erreur: aucun identifiant de billet n\'a été envoyé!');
                    }
                } elseif ($_GET['action'] == 'addComment') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                            addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                        } else {
                            throw new Exception('Erreur: tous les champs ne sont pas remplis!');
                        }
                    } else {
                        throw new Exception('Erreur : aucun identifiant de billet envoyé');
                    }
                } elseif ($_GET['action'] == 'getComment') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        getComment($_GET['id']);

                    } else {
                        throw new Exception('Le commentaire ne peut être affiché');
                    }

                }

            } else {
                listPosts();
            }
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            require('View/errorView.php');
        }
    }
}