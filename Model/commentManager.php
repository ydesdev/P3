<?php
require_once('model/Manager.php');

class CommentManager extends Manager
{
    public function getComments($postId)
    {

        $db = $this->dbConnect();
        $query = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date ASC');
        $comments = $query->execute(array($postId));

        return $query->fetchAll();
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $query->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function getComment($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?' );
        $selectedComment = $query->execute(array($id));

        return $query->fetch();

    }

    public function amendComment($id,$comment)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('UPDATE comments SET comment = :comment WHERE id = :id');
        $ammendedComment = $query->execute(array('comment' => $comment, 'id' =>$id));

        return $amendedComment;
    }

}