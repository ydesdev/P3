<?php
require_once ('Model/Manager.php');

class CommentManager extends Manager
{
    public function getComments($postId)
    {

        $db = $this->dbConnect();
        $query = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date ASC');
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
        $query = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE id = ?' );
        $query->execute(array($id));

        return $query->fetch();

    }

    public function amendComment($id,$comment)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('UPDATE comments SET comment = :comment WHERE id = :id');
        $amendedComment = $query->execute(array('comment' => $comment, 'id' =>$id));

        return $amendedComment;
    }

    public function flagComment($id)
    {
        $db = $this->dbConnect();
        $com= $this->getComment($id);
        if ($com) {
            $query = $db->prepare('UPDATE comments SET flag_count = flag_count + 1 WHERE id = :id');
            $query->execute(array('id' => $id));
        }

        return $com;
    }

    public function reviewFlaggedComments()
    {
        $db = $this->dbConnect();
        $query = $db->query('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS most_flagged_comment FROM comments WHERE flag_count > 0 ORDER BY flag_count DESC');

        return $query->fetchAll();

    }

    public function validateComment($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('UPDATE comments SET flag_count = 0 WHERE id = :id');
        $validatedComment = $query->execute(array('id' =>$id));

        return $validatedComment;
    }

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('DELETE FROM comments WHERE id= :id');
        $deletedComment =$query-> execute(array('id'=>$id));

        return $deletedComment;

    }

}