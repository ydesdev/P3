<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 05/03/2018
 * Time: 10:54
 */

require_once('Controller/MainController.php');

class MainRouter
{


    protected $mainController;

    public function __construct()
    {
        $this->mainController = new MainController();
    }


    public function MainRouterQuery()
    {
        try {
            if (!isset($_GET['action'])) {
                $this->mainController->listPosts();
            }
            else {
                $action = $_GET['action'];
                switch ($action) {
                    case "listPosts" :
                        $this->mainController->listPosts();
                        break;
                    case "post":
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $this->mainController->post();
                        } else {
                            throw new Exception('Erreur: aucun identifiant de billet n\'a été envoyé!');
                        }
                        break;
                    case "addComment":
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                                $this->mainController->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                            } else {
                                throw new Exception('Erreur: tous les champs ne sont pas remplis!');
                            }
                        }
                        break;
                    case "getComment":
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $this->mainController->getComment($_GET['id']);

                        } else {
                            throw new Exception('Le commentaire ne peut être affiché');
                        }
                        break;
                    case "flagComment":
                        $this->mainController->flagComment($_GET['id']);
                        break;
                    case "nextChapter":
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $this->mainController->nextChapter();
                        } else {
                            throw new Exception('Il n\'y a pas de chapitre à afficher!');
                        }
                        break;
                    case "previousChapter":
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                            $this->mainController->previousChapter();
                        } else {
                            throw new Exception('Il n\'y a pas de chapitre à afficher!');
                        }
                        break;

                    }
            }

        } catch (Exception $e) {
            $e->getMessage();
            require('View/errorView.php');
        }
    }
}
