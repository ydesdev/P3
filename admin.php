<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 28/02/2018
 * Time: 15:46
 */

session_start();
require_once('Model/manager.php');
require('Controler/mainControler.php');

try {
    if(isset($_GET['action']) && $_GET['action'] == 'login') {
        if (!empty($_POST['identifiant']) && !empty($_POST['password'])) {
            checkPassword($_POST['identifiant'],$_POST['password']);
        }
        else {
            throw new Exception('Identifant et/ou mot de passe manquant(s)');
        }

    }
    if (!isset($_SESSION['user'])){

        displayLoginForm();
    }

    if (isset($_GET['action']) && $_GET['action'] == 'writepost') {
        addNewPost();
    }


    elseif (isset($_GET['action'])) {
        if($_GET['action'] == 'amendComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                amendComment($_GET['id'], $_POST['changedcomment']);
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis ou aucun commentaire sélectionné!');
            }
        }



    }

    else {
        listPosts();
    }
}

catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('View/errorView.php');
}

