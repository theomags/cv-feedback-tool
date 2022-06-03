<?php
$string = htmlspecialchars($_POST['comment_type']);
$type = preg_replace('/\s+/', '_', $string);
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';
include "../templates/connector.php";

$query = "INSERT into comment_type (Type) values ('".$type."')";
$result = $pdo_db->query($query);
print '<script type="text/javascript">';
print 'alert("The data is inserted.")';
print '</script>';


?>
