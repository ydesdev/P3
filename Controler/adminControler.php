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

function addNewPost() {


}



function logOut(){
    unset($_SESSION['user']);

}

function displayLoginForm() {

    require('View/Admin/loginView.php');

}