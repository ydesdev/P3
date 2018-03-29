<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 05/03/2018
 * Time: 10:54
 */

require_once('Controller/AdminController.php');
require_once('Controller/MainRouter.php');

class AdminRouter extends MainRouter
{
    protected $adminController;

    public function __construct()
    {
        parent::__construct();
        $this->adminController = new AdminController();
    }


    public function AdminRouterQuery()
    {
        try {
            if (isset($_GET['action'])) {
                if (isset($_SESSION['user'])) {
                    $action = $_GET['action'];
                    switch ($action) {

                        case "accessAdmin":
                            $this->adminController->displayAdmin();
                            break;

                        case "writePost":
                            $this->adminController->displayWritingForm();
                            break;
                        case "savePost":
                            $this->adminController->addNewPost($_POST['title'], $_POST['content']);
                            break;

                        case "editPost":
                            if (isset($_GET['id'])) {
                                $this->adminController->editPost($_GET['id'], $_POST['title'], $_POST['content']);
                            } else {
                                throw new Exception('Aucun billet selectionné');
                            }
                            break;
                        case "deletePost":
                            if (isset($_GET['id'])) {
                                $this->adminController->removePost($_GET['id']);
                            } else {
                                throw new Exception('Aucun billet selectionné');
                            }
                            break;
                        case "displayEditForm":
                            $this->adminController->displayChapterEditForm();
                            break;

                        case "reviewComments":
                            $this->adminController->mostFlaggedComments();
                            break;

                        case "moderateComment":
                            if (isset($_GET['id'])) {
                                $this->adminController->moderateComment($_GET['id']);
                            } else {
                                throw new Exception('Aucun commentaire selectionné');
                            }
                            break;
                        case "okComment":
                            $this->adminController->okComment($_GET['id']);
                            break;
                        case "deleteComment":
                            $this->adminController->deleteComment($_GET['id']);
                            break;
                        case "displayNotes":
                            $this->adminController->displayNotepad();
                            break;
                        case "updateNotes":
                            $this->adminController->editNotes($_POST['updatedContent']);
                            break;
                        case"logOff":
                            $this->adminController->logOut();
                            break;
                    }
                } elseif (isset($_GET['action']) && $_GET['action'] == 'accessAdmin') {
                    if (!empty($_POST['identifiant']) && !empty($_POST['password'])) {
                        $this->adminController->checkPassword($_POST['identifiant'], $_POST['password']);
                        {
                            if (isset($_SESSION['user'])) {
                                $this->adminController->displayAdmin();
                            } else {
                                throw new Exception('Identifant et/ou mot de passe manquant(s)');
                            }
                        }
                    }
                    else {

                            $this->adminController->displayLoginForm();
                        }

                }
            }
            else {

            $this->adminController->displayLoginForm();
        }
        } catch
        (Exception $e) {
            $errorMessage = $e->getMessage();
            require('View/errorView.php');
        }
    }
}

