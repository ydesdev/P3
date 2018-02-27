<?php
require('Controler/mainControler.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }

        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] >0) {
                post();
            }
            else {
                throw new Exception('Erreur: aucun identifiant de billet n\'a été envoyé!');
            }
        }
        elseif($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Erreur: tous les champs ne sont pas remplis!');
                }
            }
            else {
                throw new Exception('Erreur : aucun identifiant de billet envvoyé');
            }
        }
        elseif($_GET['action'] == 'getComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                getComment($_GET['id']);

            }
            else {
                throw new Exception('Le commentaire ne peut être affiché');
            }

        }
        elseif($_GET['action'] == 'amendComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                amendComment($_GET['id'], $_POST['changedcomment']);
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis ou aucun commentaire sélectionné!');
            }
        }
        else {
            throw new Exception('Le commentaire n\'a pas pu être modifié');
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

