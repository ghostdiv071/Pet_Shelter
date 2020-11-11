<?php
session_start();
include ("bd.php");

if (!isset($_SESSION['login'])) {  //or !isset($_SESSION['password'])
    header("Location: /login.php", true, 301);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Приют</title>
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Главная страница</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="take_dog.html">Как взять собаку</a>
        <a class="p-2 text-dark" href="volunteer.html">Стать волонтёром</a>
        <a class="p-2 text-dark" href="fin_report.php">Финансовый отчёт</a>
    </nav>
    <a class="btn btn-outline-primary" href="logout.php" ">Выход</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Приют для животных</h1>
    <p class="lead">Вы можете сделать жизнь одного из наших подопечных лучше прямо сейчас!</p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Кошки</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Приютить мурчалку</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Выбрать кошку</li>
                </ul>
                <form action="animal.php" method="post">
                    <button type="submit" name="cat"  class="btn btn-lg btn-block btn-outline-primary">Посмотреть кошек</button>
                </form>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Собаки</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Завести верного друга</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Выбрать собаку</li>
                </ul>
                <form action="animal.php" method="post">
                    <button type="submit" name="dog" class="btn btn-lg btn-block btn-outline-primary">Посмотреть собак</button>
                </form>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Помощь</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Поддержать приют</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Внести пожертвование</li>
                </ul>
                <button type="button" onclick="document.location='donat_form.html'" class="btn btn-lg btn-block btn-outline-primary">Помочь</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>
