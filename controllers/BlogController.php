<?php

include_once ROOT. '/models/Blog.php';

class BlogController 
{
    // public $id;
    // public $userId;
    // public $userName;
    // public $comment;
    // public $createAd;
    
    public function actionIndex()
    {
        $comments = Blog::getNewsList(0, 4);

        require_once(ROOT . '/views/blog/list.php');
        return true;

    }

    public function actionAjax()
    {
        $db = DB::getConnection();
        $startFrom = $_POST['startFrom'];

        $res = $db->prepare("SELECT * FROM `comments` ORDER BY created_at DESC LIMIT {$startFrom}, 3");
        $res->execute();

        $articles = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC))
        {
            $articles[] = $row;
        }

        echo json_encode($articles);
        return true;
    }
} 