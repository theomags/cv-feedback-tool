<?php
//creating a new position in the database
$string = htmlspecialchars($_POST['newpos']);
$newpos = preg_replace('/\s+/', '_', $string);
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";

$query = "INSERT INTO `positions` (`Position`) VALUES ('$newpos')";
$result = $pdo_db->query($query);
 ?>
