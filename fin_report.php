<?php
    include ('bd.php');

    $d_query = mysqli_query($db, "SELECT * FROM donations");
    $d_rows = array();
    while ($d_row = mysqli_fetch_array($d_query)) {
        $d_rows[] = $d_row;
    }

    $s_query = mysqli_query($db, "SELECT * FROM spendings");
    $s_rows = array();
    while ($s_row = mysqli_fetch_array($s_query)) {
        $s_rows[] = $s_row;
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Финансовый отчёт</title>
</head>
<body class="row">
    <div class="container">
        <h3>Поступления</h3>
        <div class="table">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Размер</th>
                    <th scope="col">Имя отправителя</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($d_rows as $item) {
                    echo '<tr>';
                    echo '<td>'.$item['amount'].'</td>';
                    echo '<td>'.$item['user_name'].'</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <h3>Расходы</h3>
        <div class="table">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Размер</th>
                    <th scope="col">Цель расхода</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($s_rows as $value) {
                    echo '<tr>';
                    echo '<td>'.$value['amount'].'</td>';
                    echo '<td>'.$value['purpose'].'</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</body>