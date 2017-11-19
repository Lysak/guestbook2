<?php
include_once ROOT. '/models/Auth.php';

class AuthController
{

    public function actionLogin()
    {
        
        if (!empty($_SESSION['user_id'])) {
            header("location: /index/");
        }
        $errors = [];
        $idRegistered = 0;
        if (!empty($_GET['registration'])) {
            $idRegistered = 1;
        }
        if (!empty($_POST)) {
            if (empty($_POST['username'])) {
                $errors[] = 'Please enter User Name / Email';
            }
            if (empty($_POST['password'])) {
                $errors[] = 'Please enter password';
            }
            if (empty($errors)) {
                $salt = Auth::getSalt();
                $user = Auth::checkUserData($_POST['username'], sha1($_POST['password'].$salt));
                if (!empty($user->id)) {
                    $_SESSION['user_id'] = $user->id;
                    header("location: /index/");
                } else {
                    $errors[] = 'Please enter valid credentials';
                }
            }
        }
        require_once(ROOT . '/views/auth/login.php');
        return true;
    }


    public function actionIntropage()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        if(!isset($_SESSION["session_username"])) {
            header("location:login/");
        } else {
            require_once(ROOT . '/views/auth/intropage.php');
        }
        return true;
    }

    public function actionLogout()
    {
        session_start();
        unset($_SESSION['session_username']);
        session_destroy();
        header("location:index/");
        return true;
    }

    public function actionRegister()
    {
        if (!empty($_SESSION['user_id'])) {
            header("location: /index/");
        }
        $errors = [];
        if (!empty($_POST)) {
            if (empty($_POST['username'])) {
                $errors[] = 'Please enter User Name';
            }
            if (empty($_POST['email'])) {
                $errors[] = 'Please enter email';
            }
            if (empty($_POST['first_name'])) {
                $errors[] = 'Please enter First Name';
            }
            if (empty($_POST['last_name'])) {
                $errors[] = 'Please enter Last Name';
            }
            if (empty($_POST['password'])) {
                $errors[] = 'Please enter password';
            }
            if (strlen($_POST['username']) > 100) {
                $errors[] = 'User name is too long. Max length is 100 characters';
            }
            if (strlen($_POST['first_name']) > 80) {
                $errors[] = 'First name is too long. Max length is 80 characters';
            }
            if (strlen($_POST['last_name']) > 150) {
                $errors[] ='Last name is too long. Max length is 150 characters';
            }
            if (strlen($_POST['password']) < 6) {
                $errors[] = 'Password should contain at least 6 characters';
            }
        }

        require_once(ROOT . '/views/auth/register.php');
        if(empty($errors) && isset($_POST["register"])) {
            if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                $numrows = Auth::checkTheUserName($username);

                if($numrows==0)
                {
                    $salt = Auth::getSalt();
                    $result = Auth::addUserDataInDB($first_name, $last_name, $email, $username, sha1($password . $salt));
                    if($result){
                        $message = "Account Successfully Created";
                    } else {
                        $message = "Failed to insert data information!";
                    }

                } else {
                    $message = "That username already exists! Please try another one!";
                }

            } else {
                $message = "All fields are required!";
            }
        }
        if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";}

        return true;
    }
}