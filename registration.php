<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Регистрация пользователя</title>
</head>
<body class="text-center">

<form class="form-signin" action="save_user.php" method="post">
    <h1>Регистрация</h1>

    <label for="name" class="sr-only"><b>Имя</b></label>
    <input class="form-control" placeholder="Имя" type="text" id="name" name="name" required>

    <label for="email" class="sr-only"><b>Почта</b></label>
    <input class="form-control" placeholder="Почта" type="email" id="email" name="email">

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

    <input class="btn btn-lg btn-primary btn-block" type="submit" id="register" name="create" value="Зарегистрироваться">

    <div class="text-center font-weight-bolder p-xl-5">
        <h4>
            <a class="text-primary" href="login.php">Вход</a>
        </h4>
    </div>

</form>

</body>
</html>
