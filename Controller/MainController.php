<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
require_once('Model/UserManager.php');
require_once('Controller/Controller.php');

class MainController extends Controller
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
        $posts = $postManager->getPosts();
        require('View/Main/postView.php');
    }

    public function nextChapter()
    {
        $postManager = new PostManager();

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
        $this->setFlashMessage("Commentaire signalé à l'administrateur");
        if ($flaggedComment) {
            $this->redirect('post', $flaggedComment['post_id']);
            //header('Location: index.php?action=post&id=' . $flaggedComment['post_id']);
        } else {
            throw new Exception(' Ce commentaire n\'existe pas');
        }
    }
}