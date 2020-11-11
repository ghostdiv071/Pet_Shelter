<?php
    include ('bd.php');
    if (isset($_POST['cat'])) {
        $result = mysqli_query($db, "SELECT * FROM animals WHERE type='cat'");
        $type=0;
    }
    if (isset($_POST['dog'])){
        $result = mysqli_query($db, "SELECT * FROM animals WHERE type='dog'");
        $type=1;
    }
    $rows = array();
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    $size = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Выбрать питомца</title>
    <style>
        .center {
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="album py-5 bg-light center">
        <div class="container">
            <div class="row">
                <?php
                foreach ($rows as $myrow) {
                    echo '<div class="col-md-4">';
                        echo '<div class="card mb-4 shadow-sm">';
                            echo '<div class="card-header">';
                                echo '<h4 class="my-0 font-weight-normal">'.$myrow['name'].'</h4>';
                            echo '</div>';
                            if ($myrow['name']=='Соня') {
                                echo '<img src="images/sonya.jpg" class="bd-placeholder-img card-img-top" width="100%" height=300>';
                            } else if ($myrow['name']=='Буся') {
                                echo '<img src="images/busya.jpg" class="bd-placeholder-img card-img-top" width="100%" height=300>';
                            } else if ($myrow['name']=='Федя') {
                                echo '<img src="images/fedya.jpg" class="bd-placeholder-img card-img-top" width="100%" height=300>';
                            } else {
                                echo '<img src="images/tosha.jpg" class="bd-placeholder-img card-img-top" width="100%" height=300>';
                            }
                            echo '<div class="card-body">';
                                echo '<ul class="list-unstyled mt-3 mb-4">';
                                    echo '<li>'.'Возраст: '.$myrow['age'].'</li>';
                                    $vaccine = $myrow['vaccinated']==1 ? 'Да' : 'Нет';
                                    echo '<li>'.'Прививки: '.$vaccine.'</li>';
                                    if ($type==0) {
                                        $toilet = $myrow['toilet']==1 ? 'Да' : 'Нет';
                                        echo '<li>'.'Приучен(а) к лотку: '.$toilet.'</li>';
                                    }
                                    if ($type==1) {
                                        $leash = $myrow['leash']==1 ? 'Да' : 'Нет';
                                        echo '<li>'.'Приучена(а) к поводку: '.$leash.'</li>';
                                    }
                                echo '</ul>';
                                 echo '<button type="button" onclick="alert()" class="btn btn-lg btn-block btn-primary"">Забрать</button>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>