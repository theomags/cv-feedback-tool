<?php
session_start();
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=login_db';
include "connector.php";
include "functions.php";
$user_data = check_login($pdo_db);
$user_data2 = give_id($pdo_db);
?>
