<?php
session_start();
if (empty($_SESSION['login'])) {
    exit ("Зарегистрируйтесь или войдите на сайт<br><a    href='login.php'>Главная    страница</a>");
}

unset($_SESSION['password']);
unset($_SESSION['login']);
unset($_SESSION['id']);//
exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=login.php'></head></html>");

