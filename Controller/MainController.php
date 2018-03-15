<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
require_once('Model/UserManager.php');

class MainController
{

    public function listPosts()
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();

        require('View/listPostView.php');
    }


    public function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        require('View/Main/postView.php');
    }


    public function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();

        $affectedLines = $commentManager->postComment($postId, $author, $comment);

        if ($affectedLines == false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        } else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }

    public function getComment($id)
    {

        $commentManager = new CommentManager();
        $selectedComment = $commentManager->getComment($id);

        require('View/Admin/amendCommentView.php');
    }


    public function flagComment($id)
    {
        $commentManager = new CommentManager();
        $flaggedComment = $commentManager->flagComment($id);
        if ($flaggedComment) {
            header('Location: index.php?action=post&id=' . $flaggedComment['post_id']);
        } else {
            throw new Exception(' Ce commentaire n\'existe pas');
        }
    }
}