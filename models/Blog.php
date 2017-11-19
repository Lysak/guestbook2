<?php
class Blog
{
    // public $id;
    // public $userId;
    // public $userName;
    // public $comment;
    // public $createAd;
    
    public static function getStart($page, $limit)
    {
        return $limit * ($page - 1);
    }

    public static function getNewsList($start, $limit)
    {
        $db = Db::getConnection();

        $stmt = $db->prepare("SELECT * FROM comments ORDER BY id DESC LIMIT ".$start.", ".$limit);
        $stmt->execute();
        $comments = [];
        while ($row = $stmt->fetch(PDO::FETCH_LAZY))
        {
            $comments[] = ['id' => $row->id, 'user_id' => $row->user_id, 'comment' => $row->comment, 'created_at' => $row->created_at, 'user_name' => $row->user_name];
        }

        return $comments;
    }

    static function countArticles() {
        $db = DB::getConnection();
        $result = $db->query("SELECT COUNT(`id`) FROM `comments`");
        $result = ($row = $result->fetch());
        return $result[0];
    }

    public static function addComment($comment)
    {
        $db = DB::getConnection();
        $stmt = $db->prepare('SELECT username FROM users WHERE id = :userid');
        $stmt->execute(array('userid' => $comment['userId']));

        $dbUsername = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($dbUsername["username"] == 'unknown') {
            $dbUsername = $comment["userName"];
        } else {
            $dbUsername = $dbUsername["username"];
        }
        
        $stmt = $db->prepare('INSERT INTO comments(`user_id`, `user_name`, `comment`) VALUES(:user_id, :user_name, :comment)');
        $stmt->execute(array('user_id' => $comment['userId'], 'user_name' => $dbUsername, 'comment' => $comment['comment']));
        $comment['id'] = $db->lastInsertId();

        return $comment['id'];
    }

    public static function updateComment($comment)
    {
        $db = DB::getConnection();
        $stmt = $db->prepare('UPDATE comments SET comment = :comment_edit WHERE id = :id');
        $stmt->execute(array('id' => $comment['id'], 'comment_edit' => $comment['comment']));
        $comment['id'] = $db->lastInsertId();

        return $comment['id'];
    }
}
