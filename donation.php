<?php
if (isset($_POST['donate'])) {
    include ('bd.php');
    $amount = $_POST['amount'];
    $email = $_POST['email'];

    $res = mysqli_query($db, "SELECT name FROM users WHERE email='$email'");
    $myrow = mysqli_fetch_array($res);
    if (empty($myrow['name'])) {
        exit("Такой пользователь не зарегистрирован!");
    } else {
        $user_name = $myrow['name'];
    }

    $result = mysqli_query($db, "INSERT INTO donations (amount, user_name) VALUES ('$amount', '$user_name')");
    if ($result=='TRUE') {
        echo "Спасибо за поддержку! <a href='index.php'>Вернуться на главную</a>";
    } else {
        exit("Произошла ошибка!");
    }
}
