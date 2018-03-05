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



function checkPassword($login, $password){
    $adminManager = new UserManager();
    $hashedPassword= $adminManager->getPassword($login); //JF
    if(!empty($hashedPassword['password'])) {
        if (password_verify($password, $hashedPassword['password'])) {
            $_SESSION['user']=$login;
        }
    }
}

function addNewPost($title, $content) {
    $addedNewPost= new PostManager();
    $succesfulPost= $addedNewPost->createPost($title, $content);
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
    if($succesfulPost == false) {
        throw new Exception('Impossible d\'éditer le texte. Tous les paramètres sont-ils bien définis? !');
    }
    else {
        header('index.php?action=post&id=' . $id);
    }

}

function mostFlaggedComments() {
    $currentStanding= new CommentManager();
    $flags= $currentStanding->reviewFlaggedComments();

    require('View/Admin/flaggedCommentsView.php');

}

function logOut(){
    unset($_SESSION['user']);

}

function displayLoginForm() {

    require('View/Admin/loginView.php');

}