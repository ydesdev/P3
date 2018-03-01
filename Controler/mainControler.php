<?php
require_once('Model/postManager.php');
require_once('Model/commentManager.php');
require_once('Model/adminManager.php');

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require('View/listPostView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('View/postView.php');
}


function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if($affectedLines == false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function getComment($id) {

    $commentManager = new CommentManager();
    $selectedComment = $commentManager->getComment($id);

    require('View/amendCommentView.php');
}

//fonctions admin
// On reprend les données du formulaire et on s'en sert de variable pour vérifier le pwd
// Appliquer des conditions à $_SESSION + message d'erreur si besoin
function checkPassword($login, $password){
    $adminManager = new adminManager();

    $hashedPassword= $adminManager->getPassword($login); //JF
    if(!empty($hashedPassword['password'])) {
        if (password_verify($password, $hashedPassword['password'])) {
            $_SESSION['user']=$login;
        }
    }
}

function addNewPost()




function logOut(){
    unset($_SESSION['user']);
}

function displayLoginForm() {

    require('View/loginView.php');

}