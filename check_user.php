<?php
session_start();
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
}
if (isset($_POST['password'])) {
    $password=$_POST['password'];
    if ($password =='') {
        unset($password);
    }
}
if (empty($login) or empty($password)) {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

include ("bd.php");
$result = mysqli_query($db,"SELECT * FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password']))
{
    exit ("Такого пользователя не существует.");
}
else {
    if ($myrow['password']==$password) {
        $_SESSION['id']=$myrow['id'];
        $_SESSION['login']=$myrow['login'];
        //$_SESSION['password']=$myrow['password'];
        if ($_POST['remember'] == 1) {
            setcookie("login", $_POST["login"], time()+9999999);
            setcookie("password", $_POST["password"], time()+9999999);
        }
        header("Location: /index.php", true, 301);
        //echo "Вы успешно вошли на сайт!";
        exit();
    }
    else {
        exit ("Неправильный пароль.");
    }
}
