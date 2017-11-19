<?php

include_once ROOT. '/models/Blog.php';

class SiteController {

    protected $page = false;
    protected $limit = 4;
    protected $prev;
    protected $next;
    protected $count_pages;
    
    public function actionIndex()
    {
        // echo ("'' => 'site/index'");
        // echo '<br />';
        // print_r($_POST);

        require_once ROOT."/models/Blog.php";

        if (isset($_SESSION['user_id'])) {
            $default = $_SESSION['user_id'];
            $myCommentIsBold = $_SESSION['user_id'];
        } else {
            $default = '1';
            $myCommentIsBold = '-1';
        }

        if (isset($_SESSION['user_id'])) {
            $user = $_SESSION['user_id'];
        } elseif (isset($_POST['unknownUser'])){
            $user = $_POST['unknownUser'];
        } else {
            $user = '1';
        }

        if (!empty($_POST['comment'])) {
            $comment['comment'] = $_POST['comment'];
            $comment['userId'] = $default;
            $comment['userName'] = $user;

            Blog::addComment($comment);
        }

        if (isset($_GET['comment-edit']) && isset($_GET['comment-id'])) {
            $edit_comment = $_GET['comment-edit'];
            $id_comment = $_GET['comment-id'];
            $comment['comment'] = $edit_comment;
            $comment['id'] = $id_comment;

            Blog::updateComment($comment);
        }

        // $newsList = array();

        
        // текущая страница
        // echo '<br/>';
        // var_dump($comments);

        if ($this->page < 1 or $this->page == "") {
            $this->page = 1;
        }

        if (array_key_exists('page', $_GET))
        {
            $this->page = $_GET['page'];
        }

        // количество строк-статей на стр.
        
        // начало выборки из БД
        $start = Blog::getStart($this->page, $this->limit);
        $comments = Blog::getNewsList($start, $this->limit);
        // $newsList = Blog::getNewsList($start, $this->limit);

        $this->paginate($this->limit);
        $prev = $this->prev;
        $next = $this->next;
        $count_pages = $this->count_pages;
        $page = $this->page;
        
        require_once(ROOT . '/views/index.php');
        return true; // Warning: call_user_func_array() expects parameter 1 to be a valid callback, class 'SiteController' does not have a method 'actionIndexisite' in /var/www/guestbook.loc/components/Router.php on line 35
    }

    public function paginate($limit) 
    {
        //PAGINATION
        $count_articles = Blog::countArticles();
        // общее количество стр.
        $this->count_pages = ceil($count_articles / $limit);
        if ($this->page > $this->count_pages) $this->page = $this->count_pages;
        $this->prev = $this->page - 1;
        $this->next = $this->page + 1;
        if ($this->prev < 1) $prev = 1;
        if ($this->next > $this->count_pages) $this->next = $this->count_pages;
        //PAGINATION END
    }
}