<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Вход в учётную запись</title>
</head>
<body class="text-center">

<form class="form-signin" action="check_user.php" method="post">
    <h1>Вход</h1>

    <label for="login" class="sr-only"><b>Логин</b></label>
    <input class="form-control" placeholder="Логин" type="text" id="login" name="login" required>

    <label for="password" class="sr-only"><b>Пароль</b></label>
    <input class="form-control" placeholder="Пароль" type="password" id="password" name="password" required>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me" name="remember">
            Запомнить меня
        </label>
    </div>

    <input class="btn btn-lg btn-primary btn-block" type="submit" id="signin" name="create" value="Войти">

    <div class="text-center font-weight-bolder p-xl-5">
        <h4>
            <a class="text-primary" href="registration.php">Регистрация</a>
        </h4>
    </div>

</form>

</body>
</html>
