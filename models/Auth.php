<?php
class Auth
{
    public static function checkUserData($userName, $password)
    {
        // $db = DB::getConnection();
        // $query = $db->query("SELECT * FROM usertbl WHERE username='" . $username . "' AND password='" . $password . "'");

        // while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        //     $dbusername = $row['username'];
        //     $dbpassword = $row['password'];
        //     $dbid       = $row['id'];
        // }

        // if ($username == $dbusername && $password == $dbpassword && $id = $dbid) {
        //     $_SESSION['session_username'] = $username;
        //     $_SESSION['session_userid'] = $id;
        //     header("Location: intropage");
        // }

        // return true;
    }

    
    public static function checkTheUserName($username)
    {
        // $db = DB::getConnection();
        // $query=$db->query("SELECT * FROM usertbl WHERE username='".$username."'");
        // $numrows=$query->fetchColumn();

        // return $numrows;
    }

    public static function addUserDataInDB($full_name, $email, $username, $password)
    {


        // $db = DB::getConnection();
        // $sql="INSERT INTO usertbl
        // (full_name, email, username, password) 
        // VALUES('$full_name','$email', '$username', '$password')";

        // $result=$db->query($sql);
        // return $result;
    }
}