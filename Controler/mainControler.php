<?php
require_once('Model/postManager.php');
require_once('Model/commentManager.php');

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

function amendComment($id, $amendedComment)
{
    $commentManager = new CommentManager();
    $selectedComment = $commentManager->getComment($id);
    $ammendedLines = $commentManager->amendComment($id,$amendedComment);

    header('Location: index.php?action=post&id=' . $selectedComment['post_id'] );



}