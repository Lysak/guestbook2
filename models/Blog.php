<?php
class Blog
{
    public $id;
    public $userId;
    public $userName;
    public $comment;
    public $createAd;
    
    public static function getNewsItemById($id)
    {
        // $id = intval($id);

        // if ($id) {

        //     $db = Db::getConnection();

        //     $result = $db->query('SELECT * from articles WHERE id='.$id);

        //     $result->setFetchMode(PDO::FETCH_ASSOC);

        //     $newsItem = $result->fetch();

        //     return $newsItem;
        // }
    }


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
            // var_dump($comments);
        }

        return $comments;

        // $newsList = array();

        // $result = $db->query("SELECT * FROM comments ORDER BY id DESC LIMIT ".$start.", ".$limit);
        // $result->setFetchMode(PDO::FETCH_ASSOC);
        // $i = 0;
        // while($row = $result->fetch()) {
        //     $newsList[$i]['id'] = $row['id'];
        //     $newsList[$i]['title'] = $row['title'];
        //     $newsList[$i]['date'] = $row['date'];
        //     $newsList[$i]['likes'] = $row['likes'];
        //     $newsList[$i]['short_content'] = $row['short_content'];
        //     $i++;
        // }
        

        // return $newsList;
    }

    public static function getLikes()
    {
        // $db = DB::getConnection();

        // if (isset($_POST['liked']) && isset($_SESSION['session_userid'])) {
        //     $userid = $_SESSION['session_userid'];
        //     $postid = $_POST['postid'];
        //     $result = $db->query("SELECT * FROM articles WHERE id=$postid");
        //     $row = $result->fetch(PDO::FETCH_ASSOC);
        //     $n = $row['likes'];

        //     $db->query("UPDATE articles SET likes=$n+1 WHERE id=$postid");
        //     $db->query("INSERT INTO likes(userid, postid) VALUE($userid, $postid)");
        //     exit();
        // }
        // if (isset($_POST['unliked']) && isset($_SESSION['session_userid'])) {
        //     $userid = $_SESSION['session_userid'];
        //     $postid = $_POST['postid'];
        //     $result = $db->query("SELECT * FROM articles WHERE id=$postid");
        //     $row = $result->fetch(PDO::FETCH_ASSOC);
        //     $n = $row['likes'];
        //     //delete from the likes before updation posts
        //     $db->query("DELETE FROM likes WHERE postid=$postid AND userid=$userid");
        //     $db->query("UPDATE articles SET likes=$n-1 WHERE id=$postid");
        //     exit();
        // }


    }

    public static function ifUserHasAlreadyLikeThisPost($newsItem)
    {
        // $db = DB::getConnection();
        // if(isset($_SESSION['session_userid'])) {
        //     $userid = $_SESSION['session_userid'];
        //     // echo $userid;
        //     $result = $db->query("SELECT * FROM likes WHERE userid=".$userid." AND postid=".$newsItem['id']."");
        //     $result->execute();
        //     $rowCount = $result->rowCount();
        //     return $rowCount;
        // };
    }


    public static function createProduct($options)
    {
        // $db = DB::getConnection();
        // $sql = 'INSERT INTO articles '
        //         . '(title, short_content, content)'
        //         . 'VALUES '
        //         . '(:title, :short_content, :content)';
        // $result = $db->prepare($sql);
        // $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        // $result->bindParam(':short_content', $options['short_content'], PDO::PARAM_STR);
        // $result->bindParam(':content', $options['content'], PDO::PARAM_STR);


        // if ($result->execute()) {
        //     return $db->lastInsertId();
        // }
        // return 0;
    }

    static function countArticles() {
        $db = DB::getConnection();
        $result = $db->query("SELECT COUNT(`id`) FROM `comments`");
        $result = ($row = $result->fetch());
        return $result[0];
    }

    // public static function addCommentWithActualRegisterUsername($comment)
    // {
    //     $db = DB::getConnection();
    //     $stmt = $db->prepare('SELECT username FROM users WHERE id = :userid');
    //     $stmt->execute(array('userid' => $this->userId));

    //     $dbUsername = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $dbUsername;
    // }

    public static function addComment($comment)
    {
        $db = DB::getConnection();
        $stmt = $db->prepare('SELECT username FROM users WHERE id = :userid');
        $stmt->execute(array('userid' => $comment['userId']));

        $dbUsername = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($this->userName);
        
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