<?php
session_start();
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
                    FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
                    FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
                    FILTER_SANITIZE_STRING);
if(mb_strlen($login) <5 || mb_strlen($login)>90){
    echo "Недопустима длина логина";
    exit();}

    else if(mb_strlen($name) <3 || mb_strlen($name)>50){
        echo "Недопустима длина имени";
        exit();
    }
    else if(mb_strlen($pass) <6 || mb_strlen($pass)>8){
            echo "длина пароля должна быть от 6 до 8 символов";
            exit();
    }


if(count($email) != 0)
{
    $_SESSION['message'] = 'Такая почта уже существует';
    
    
}


$pass = md5($pass."s4234b2jh34g");

$mysql = new mysqli('localhost','root','','art-vitrina');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `email`)
            VALUES('$login', '$pass','$name','$email')");
$mysql->close();
header('Location: http://art-vitrina?modal');
?>
    