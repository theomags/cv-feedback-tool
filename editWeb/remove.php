<?php
$string = htmlspecialchars($_GET['a']); //gets the URL data using GET call_user_method
$nm = preg_replace('/\s+/', '_', $string);
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';

include "../templates/connector.php";

$query = "DELETE FROM applicantcomments WHERE Comment = '$nm'";
$result = $pdo_db->query($query);

header ("location:index.php");
 ?>
