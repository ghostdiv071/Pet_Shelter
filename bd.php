<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'mysql');
define('DB_PASSWORD', 'mysql');
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysqli_select_db($db, 'project');
