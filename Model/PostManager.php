<?php
require_once ('Model/Manager.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d.%m.%Y\') AS creation_date_fr FROM posts ORDER BY creation_date');

        return $req->fetchAll();

    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function getChapterId()
    {
        $db= $this->dbConnect();
        $req = $db->query('SELECT id AS creation_date_fr FROM posts ORDER BY creation_date');

        return $req->fetchAll();

    }

    public function createPost($title, $content)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES (:title, :content, NOW())');
        $newPost = $query->execute(array('title' => $title, 'content' => $content));

        return $newPost;

    }

    public function updatePost($id, $title, $content)
    {
        $db = $this->dbConnect();
        $post= $this->getPost($id);
        $query = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE ID = :id');
        $updatedPost = $query->execute(array('id' => $id, 'title' => $title, 'content' => $content));

        return $post;
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('DELETE FROM posts WHERE id = :id');
        $deletedPost = $query->execute(array('id' => $id));

        return $deletedPost;
    }
}