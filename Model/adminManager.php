<?php
/**
 * Created by PhpStorm.
 * User: yanndesdevises
 * Date: 27/02/2018
 * Time: 09:00
 // ici on aura tous les modèles liés à l'admin: CRUD
 * méthode pour Effacer un billet de la base ($dbConnect + DELETE FROM posts etc...)
 * méthode pour  Modération de commentaires
 //  public function ammendComment($id,$comment)
{
$db = $this->dbConnect();
$query = $db->prepare('UPDATE comments SET comment = :comment WHERE id = :id');
$ammendedComment = $query->execute(array('comment' => $comment, 'id' =>$id));

return $ammendedComment;
}
 méthode pour la création de billets:
 *
 **/

class adminManager extends MainManager
{
    public function amendComment($id, $comment)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('UPDATE comments SET comment = :comment WHERE id = :id');
        $amendedComment = $query->execute(array('comment' => $comment, 'id' => $id));

        return $amendedComment;
    }

    public function createPost($id, $title, $content)
    {
        $db = $this->dbConnnect();
        $query = $db->prepare('INSERT INTO posts(id, title, content, creation_date) VALUES (id = :id, title = :title, content= :content, NOW())');
        $newPost = $query->execute(array('id' => $id, 'title' => $title, 'content' => $content));

        return $newPost;
    }

    public function updatePost($id, $title, $content)
    {
        $db = $this->dbConnnect();
        $query = $db->prepare('UPDATE posts SET title, content WHERE ID = :id');
        $updatedPost = $query->execute(array('id' => $id, 'title' => $title, 'content' => $content));

        return $updatedPost;
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('DELETE FROM posts WHERE id = :id');
        $deletedPost = $query->execute(array('id' => $id));

        return $deletedPost;
    }

    public function getPassword($user_name)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT password FROM users WHERE user_name = :user_name');
        $req->execute(array('user_name' => $user_name));
        $password = $req->fetch();

        return $password;
    }
}

