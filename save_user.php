<?php
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if ($name == '') {
        unset($name);
    }
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email == '') {
        unset($email);
    }
}

if (empty($email) or empty($password) or empty($name))
{
    exit ("Заполните пустые поля.");
}

$login = htmlspecialchars($login);
$login = stripslashes($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$name = stripslashes($name);
$name = htmlspecialchars($name);
$email = stripslashes($email);
$email = htmlspecialchars($email);

$login = trim($login);
$password = trim($password);

include ("bd.php");
$result = mysqli_query($db,"SELECT id FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
    exit ("Введённый Вами логин уже существует, попробуйте другой.");
}
if ($login == 'admin') {
    $isadmin = 1;
} else {
    $isadmin = 0;
}

$result2 = mysqli_query($db,"INSERT INTO users (login, password, name, email, isadmin) VALUES('$login', '$password', '$name','$email', '$isadmin')");

if ($result2=='TRUE')
{
    $_SESSION['id']=$myrow['id'];
    $_SESSION['login']=$myrow['login'];
    //$_SESSION['password']=$myrow['password'];
    if ($_POST['remember'] == 1) {
        setcookie("login", $_POST['login'], time() + 9999999);
    }
    header("Location: /index.php", true, 301);
}
else {
    echo "Не удалось зарегистрироваться.";
}
print_r("INSERT INTO users (login, password, name, email, isadmin) VALUES('$login', '$password', '$name','$email', '$isadmin')");
