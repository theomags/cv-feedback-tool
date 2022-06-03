<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pos = $_POST['jobtytle'];
$email = $_POST['email'];
$num = $_POST['num'];
$jobtytle = $_POST['jobtytle'];
$pdo_dsn = 'mysql:host=127.0.0.1;dbname=applicant_db';

include "../templates/connector.php";

$query = "INSERT into applicantdetails(Fname, Lname, Pos, Email, Num) VALUES ('".$fname."', '".$lname."', '".$pos."', '".$email."', '".$num."')";
$result = $pdo_db->query($query);

?>
