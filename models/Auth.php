<?php
class Auth
{
    public static function checkUserData($username, $password)
    {
        $db = DB::getConnection();


        $stmt = $db->prepare('SELECT id FROM users WHERE (username = :username or email = :username) and password = :password');
        $stmt->execute(array('username' => $username, 'password' => $password));
        $user = $stmt->fetch(PDO::FETCH_LAZY);
        if(!empty($user)){
            $user['id'] = $user->id;
            $user['userName'] = $user->user_name;
            $user['email'] = $user->email;
            $user['firstName'] = $user->first_name;
            $user['lastName'] = $user->last_name;
            return $user;
        } else {
            return false;
        }
    }
    
    public static function checkTheUserName($username)
    {
        $db = DB::getConnection();
        $query=$db->query("SELECT * FROM users WHERE username='".$username."'");
        $numrows=$query->fetchColumn();

        return $numrows;
    }

    public static function addUserDataInDB($first_name, $last_name, $email, $username, $password)
    {


        $db = DB::getConnection();
        $sql = "INSERT INTO users
        (first_name, last_name, email, username, password) 
        VALUES('$first_name', '$last_name', '$email', '$username', '$password')";

        $result = $db->query($sql);
        return $result;
    }

    public static function getSalt()
    {
        $salt = DB::getSalt();
        return $salt;
    }
}