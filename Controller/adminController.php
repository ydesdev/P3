<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 01/03/2018
 * Time: 17:02
 */
//fonctions admin
// On reprend les données du formulaire et on s'en sert de variable pour vérifier le pwd
// Appliquer des conditions à $_SESSION + message d'erreur si besoin
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
require_once('Model/UserManager.php');


//User functions
function checkPassword($login, $password){
    $adminManager = new UserManager();
    $hashedPassword= $adminManager->getPassword($login); //JF
    if(!empty($hashedPassword['password'])) {
        if (password_verify($password, $hashedPassword['password'])) {
            $_SESSION['user']=$login;
        }
        else {
            throw new Exception('Identifiant ou mot de passe incorrect');

        }

    }
}

//Display functions
function displayAdmin() {
    require ('View/Admin/adminMenuView.php');
}

function displayWritingForm() {
    require ('View/Admin/writePostView.php');
}

function displayLoginForm() {

    require('View/Admin/loginView.php');

}
function displayChapterEditForm() {
    $displayChapters = new PostManager();
    $posts = $displayChapters->getPosts();

    require('View/Admin/editPostView.php');
}

//Edit functions

function addNewPost($id, $title, $content) {
    $addedNewPost= new PostManager();
    $succesfulPost= $addedNewPost->createPost($id, $title, $content);
    if($succesfulPost == false) {
        throw new Exception('Impossible d\'ajouter ce chapitre. Tous les paramètres sont-ils bien définis? !');
    }
    else {
        header('Location: index.php?action=listPosts');
    }

}

function editPost($id,$title,$content) {
    $editedPost= new PostManager();
    $succesfulEdition= $editedPost->updatePost($id, $title, $content);
    if($succesfulEdition == false) {
        throw new Exception('Impossible d\'éditer le texte. Tous les paramètres sont-ils bien définis? !');
    }
    else {
        header('index.php?action=post&id=' . $id);
    }

}

function removePost($id) {
    $removedPost= new PostManager();
    $succesfulRemoval= $removedPost->deletePost($id);
    if($succesfulRemoval == false) {
        throw new Exception('Impossible d\'effacer le texte. Tous les paramètres sont-ils bien définis? !');
    }
    else {
        header('index.php?action=accessAdmin');
    }

}

//Comment Admin

function mostFlaggedComments() {
    $currentStanding= new CommentManager();
    $flags= $currentStanding->reviewFlaggedComments();

    require('View/Admin/flaggedCommentsView.php');

}



function logOut(){
    unset($_SESSION['user']);

}

