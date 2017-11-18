<?php

class User
{
    public static function checkUserData($userName, $password)
    {
        // $db = DB::getConnection();
        // // $sql = 'SELECT id, email, password FROM user WHERE email = :email AND password = :password';
        // $sql = 'SELECT id FROM users WHERE (username = :username or email = :username) and password = :password';
        // $result = $db->prepare($sql);
        // $result->bindParam(':username', $userName, PDO::PARAM_INT);
        // $result->bindParam(':password', $password, PDO::PARAM_INT);
        // $result->execute();
        // $user = $result->fetch();
        // if (!empty($user)) {
        //     return $user['id'];
        // }
        // return false;
    }

    public static function auth($userId)
    {
        // $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        // if (!isset($_SESSION['user'])) 
        // {
        //     header("Location: /admin/login");
        // }
        //     return true;
    }
}