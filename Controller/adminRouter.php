<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 05/03/2018
 * Time: 10:54
 */

require_once('Controller/adminController.php');

class AdminRouter extends MainRouter
{

    public function AdminRouterQuery()
    {
        try {
            if (isset($_GET['action']) && $_GET['action'] == 'accessAdmin') {

                if (isset($_SESSION['user'])) {
                    displayAdmin();
                }
            }
            if (isset($_SESSION['user'])) {
                   if (isset($_GET['action']) && $_GET['action'] == 'writePost') {
                                displayWritingForm();
                                {
                                    if (!empty($_POST['title']) && !empty($_POST['content'])) {
                                        addNewPost($_POST['title'], $_POST['content']);
                                    }
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
                    {
                        if (isset($_SESSION['user'])) {
                            {
                                displayAdmin();
                            }
                        } else {
                            throw new Exception('Identifant et/ou mot de passe manquant(s)');
                        }
                    }
                }
            }
            elseif (!isset($_SESSION['user'])) {

                        displayLoginForm();
                    }
                }
        catch
        (Exception $e) {
            $errorMessage = $e->getMessage();
            require('View/errorView.php');
        }

    }
}
