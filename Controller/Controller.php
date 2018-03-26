<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');
require_once('Model/UserManager.php');

class Controller
{
    /** @var CommentManager */
    protected $commentManager;
    /** @var UserManager  */
    protected $userManager;
    /** @var PostManager  */
    protected $postManager;

    public function __construct()
    {
        $this->commentManager = new CommentManager();
        $this->userManager = new UserManager();
        $this->postManager = new PostManager();

    }


    public function setFlashMessage($message, $type = 'info')
    {
        $_SESSION['flashmessage'] = $message;
    }

    public function redirect($action, $id = null)
    {
        $path =  'index.php?action='.$action;

        if($id){
            $path .= '&id='.$id;
        }
        header('Location: '.$path);
    }
}