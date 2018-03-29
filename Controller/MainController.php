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
        $commentManager = new CommentManager();

        $nextPostId = $_GET['id'] +1;
        $post= $postManager->getPost($nextPostId);
        $comments = $commentManager->getComments($nextPostId);
        $posts = $postManager->getPosts();

        if($post){

        header('Location: index.php?action=post&id=' . $nextPostId);}

        else {
            throw new Exception(' Plus de chapitre à afficher');
        }
    }

    public function previousChapter()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $prevPostId = $_GET['id'] -1;
        $post= $postManager->getPost($prevPostId);
        $comments = $commentManager->getComments($prevPostId);
        $posts = $postManager->getPosts();

        if($post){
        header('Location: index.php?action=post&id=' . $prevPostId);}

        else {
            throw new Exception('Pas de chapitre précédent!');
        }

    }


/*$nextPostId= 0;
        $previousPostId= 0;
        $isCurrentPost = 0;
foreach($posts as $currentPost) {

            if ($isCurrentPost == 1) {
                $nextPostId = $currentPost['id'];
                break;
            }
            if ($currentPost['id'] = $_GET['id'] and $isCurrentPost == 0) {
                $isCurrentPost = 1;
            }
            if ($isCurrentPost == 0) {
                $previousPostId = $currentPost['id'];
            }
        }
*/


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