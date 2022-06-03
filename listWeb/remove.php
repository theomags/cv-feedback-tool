<?php
$nm = $_GET['a']; //gets the URL data using GET call_user_method
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';

include "../templates/connector.php";

$query = "DELETE FROM applicantdetails WHERE Lname = '$nm'";
$result = $pdo_db->query($query);

header ("location:index.php");
 ?>
